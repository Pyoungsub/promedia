<?php

namespace App\Http\Livewire\Boards;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Media;
use Livewire\WithPagination;
class Medias extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $sort = '';
    public $search = '';

    public $writeMediaModal;
    public $title;
    public $photo;
    public $url;
    public function writeMedia()
    {
        $this->writeMediaModal = true;
    }
    public function save()
    {
        $validated = $this->validate([ 
            'title' => 'required',
            'photo' => 'required|mimes:pdf,jpeg,jpg|max:2048',
            'url' => 'required|active_url',
        ]);
        auth()->user()->admin->medias()->firstOrCreate([
            'title' => $this->title, 
            'img_path' => $this->photo->storePublicly('media', ['disk' => 'public']),
            'url' => $this->url
        ]);
        $this->reset(['writeMediaModal', 'title', 'url']);
    }
    public function deleteMedia($id)
    {
        Media::find($id)->delete();
    }
    public function mediaSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $medias = Media::where('title', 'like', '%'.$this->search.'%')
        ->paginate(12);
        return view('livewire.boards.medias', ['medias' => $medias]);
    }
}
