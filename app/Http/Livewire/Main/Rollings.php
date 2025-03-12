<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\Rolling;
use Livewire\WithFileUploads;

class Rollings extends Component
{
    use WithFileUploads;
    public $title;
    #[Validate('image|max:1024')] // 1MB Max
    public $photo;
    public $photoPreview;
    public $addOrganizationModal;
    public function add()
    {
        $this->addOrganizationModal = true;
    }
    public function save()
    {
        $path = $this->photo->storePublicly('organizations', ['disk' => 'public']);
        Rolling::create(['title' => $this->title, 'img_path' => $path]);
        $this->reset(['title', 'photo', 'photoPreview', 'addOrganizationModal']);
    }
    public function render()
    {
        $banners = Rolling::orderBy('title', 'desc')->get();
        return view('livewire.main.rollings', ['banners' => $banners]);
    }
}
