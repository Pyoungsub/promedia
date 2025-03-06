<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\Event;
class Events extends Component
{
    public $photosModal;
    public $photos = [];
    public $selected_event;
    public function showMore($id)
    {
        $this->reset(['photos']);
        $this->selected_event = Event::find($id);
        foreach ($this->selected_event->event_photos as $photo)
        {
            $this->photos[] = $photo->img_path;
        }
        $this->photosModal = true;
    }
    public function render()
    {
        $events = Event::orderBy('date', 'desc')->with('first_event_photo')->limit(10)->get();
        return view('livewire.main.events', ['events' => $events]);
    }
}
