<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Consonant;
use App\Models\Partnership;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class Lists extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $modifyModal;
    public $consonants;
    public $consonant_id;
    public $partnership_id;
    public $name;
    public $photoPreview;
    public $logo;
    public $img_path;
    public $url;

    public $search = '';
    public $addPartnershipModal;


    public function memberSearch()
    {
        $this->resetPage();
    }
    public function modify($id)
    {
        $this->resetValidation();
        $this->reset(['consonant_id', 'partnership_id', 'name', 'photoPreview', 'logo', 'img_path', 'url']);
        $partnership = Partnership::find($id);
        $this->consonant_id = $partnership->consonant_partnership->consonant->id;
        $this->partnership_id = $partnership->id;
        $this->name = $partnership->name;
        $this->img_path = $partnership->img_path;
        if($partnership->url)
        {
            $this->url = $partnership->url->url;
        }
        else
        {
            $this->url = null;
        }
        
        $this->modifyModal = true;
    }
    public function deleteLogo()
    {
        $partnership = Partnership::find($this->partnership_id);
        Storage::delete('public/' . $partnership->img_path);
        $partnership->update(['img_path' => null]);
        $this->img_path = false;
    }
    public function modified()
    {
        $validatedData = $this->validate([
            'consonant_id' => 'required | exists:consonants,id',
            'name' => ['required',' min:2', Rule::unique('partnerships')->ignore($this->partnership_id)],
            'logo' => 'nullable | image',
            'url' => 'nullable | active_url'
        ]);
        $partnership = Partnership::find($this->partnership_id);
        if($this->logo)
        {
            Storage::delete('public/' . $partnership->img_path);
            $this->img_path = $this->logo->storePublicly('logos', ['disk' => 'public']);
        }
        $partnership->update([
            'name' => $this->name,
            'img_path' => $this->img_path,
        ]);
        if($this->url)
        {
            $partnership->url()->updateOrCreate(
                ['partnership_id' => $partnership->id], 
                ['url' => $this->url]
            );
        }
        elseif($partnership->url)
        {
            $partnership->url->delete();
        }
        //auth()->user()->admin->pdfs()->firstOrCreate(['date' => $this->date, 'file_path' => $this->file->storePublicly('pdf', ['disk' => 'public'])]);
        $this->reset(['consonant_id', 'partnership_id', 'name', 'photoPreview', 'logo', 'img_path', 'url', 'modifyModal']);
    }
    public function addPartnership()
    {
        $this->reset(['consonant_id', 'partnership_id', 'name', 'photoPreview', 'logo', 'img_path', 'url']);
        $this->addPartnershipModal = true;
    }
    public function add()
    {
        $validatedData = $this->validate([
            'consonant_id' => 'required | exists:consonants,id',
            'name' => 'required | min:2 | unique:partnerships',
            'logo' => 'nullable | image',
            'url' => 'nullable | active_url'
        ]);
        $partnership = Partnership::create(['name' => $this->name]);
        $partnership->consonant_partnership()->create(['consonant_id' => $this->consonant_id, 'partnership_id' => $partnership->id]);
        
        if($this->logo)
        {
            $this->img_path = $this->logo->storePublicly('logos', ['disk' => 'public']);
            $partnership->update(['img_path' => $this->img_path]);
        }
        if($this->url)
        {
            $partnership->url()->updateOrCreate(
                ['partnership_id' => $partnership->id], 
                ['url' => $this->url]
            );
        }
        $this->reset(['consonant_id', 'partnership_id', 'name', 'photoPreview', 'logo', 'img_path', 'url', 'addPartnershipModal']);
    }
    public function delete($id)
    {
        $partnership = Partnership::find($id);
        Storage::delete('public/' . $partnership->img_path);
        $partnership->delete();
    }
    public function mount()
    {
        $this->consonants = collect(Consonant::all());
    }
    public function render()
    {
        $partnerships = Partnership::where('name', 'like', '%'.$this->search.'%')->orderBy('name', 'asc')->paginate(10);
        return view('livewire.member.lists', ['partnerships' => $partnerships]);
    }
}
