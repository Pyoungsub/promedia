<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\Carousel as Slider;
class Carousel extends Component
{
    use WithFileUploads;
    public $addCarousel;
    public $photoPreview;
    public $photo;

    public $img_path;
    public $title;
    public $sub_title;
    public $being_modified_id;
    public function carousel()
    {
        $this->reset(['being_modified_id', 'photoPreview', 'photo', 'title', 'sub_title']);
        $this->addCarousel = true;
    }
    public function save()
    {
        $this->validate([
            'being_modified_id' => 'nullable|integer',
            'photo' => 'required_if:being_modified_id,null|image|nullable',
            'title' => 'nullable|string|min:3',
            'sub_title' => 'nullable|string|min:3',
        ]);
        if($this->being_modified_id)
        {
            $carousel = Slider::find($this->being_modified_id);
            if($this->photo)
            {
                Storage::delete('public/' . $carousel->file_path);
                $img_path = $this->photo->storePublicly('company', ['disk' => 'public']);
                $carousel->update(['img_path' => $img_path]);
            }
            $carousel->update([
                'title' => $this->title,
                'sub_title' => $this->sub_title
            ]);
        }
        else
        {
            $img_path = $this->photo->storePublicly('company', ['disk' => 'public']);
            Slider::create([
                'img_path' => $img_path,
                'title' => $this->title,
                'sub_title' => $this->sub_title
            ]);
        }
        $this->reset(['photoPreview', 'photo', 'title', 'sub_title', 'addCarousel']);
    }
    public function delete($id)
    {
        $carousel = Slider::find($id);
        Storage::delete('public/' . $carousel->file_path);
        $carousel->delete();
    }
    public function modify($id)
    {
        $this->being_modified_id = $id;
        $carousel = Slider::find($this->being_modified_id);
        $this->img_path = $carousel->img_path;
        $this->title = $carousel->title;
        $this->sub_title = $carousel->sub_title;
        $this->addCarousel = true;
    }
    public function render()
    {
        $this->dispatchBrowserEvent('jquery');
        $carousels = Slider::select('id', 'img_path', 'title', 'sub_title')->get();
        return view('livewire.main.carousel', ['carousels' => $carousels]);
    }
}