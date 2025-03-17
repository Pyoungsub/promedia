<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\Rolling;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Rollings extends Component
{
    use WithFileUploads;
    public $title;
    #[Validate('image|max:1024')] // 1MB Max
    public $photo;
    public $url;
    public $img_path;
    public $photoPreview;
    public $addOrganizationModal;
    public $selected_rolling;
    public function add()
    {
        $this->addOrganizationModal = true;
    }
    public function save()
    {
        $validated = $this->validate([
            'title' => 'required|min:3',
            'photo' => 'required_if:selected_rolling,null',
            'url'   => 'nullable|active_url',
        ]);
        $path = $this->photo ? $this->photo->storePublicly('organizations', ['disk' => 'public']) : null;
        if ($this->selected_rolling) {
            if ($path) {
                Storage::delete('public/' . $this->selected_rolling->img_path);
            }
            $this->selected_rolling->update([
                'title'    => $this->title,
                'img_path' => $path ?? $this->selected_rolling->img_path,
                'url'      => $this->url,
            ]);
        } else {
            Rolling::create([
                'title'    => $this->title,
                'img_path' => $path,
                'url'      => $this->url,
            ]);
        }

        $this->reset(['title', 'photo', 'photoPreview', 'img_path', 'url', 'addOrganizationModal']);
    }
    public function modify($id)
    {
        $this->selected_rolling = Rolling::find($id);
        $this->title = $this->selected_rolling->title;
        $this->img_path = $this->selected_rolling->img_path;
        $this->url = $this->selected_rolling->url;
        $this->addOrganizationModal = true;
    }
    public function delete($id)
    {
        $rolling = Rolling::find($id);
        Storage::delete('public/' . $rolling->img_path);
        $rolling->delete();
    }
    public function render()
    {
        $banners = Rolling::orderBy('title', 'desc')->get();
        return view('livewire.main.rollings', ['banners' => $banners]);
    }
}
