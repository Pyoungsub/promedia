<?php

namespace App\Http\Livewire\Events;

use Livewire\Component;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Database\Query\Builder;
use App\Models\Event;
use App\Models\EventPhoto;
use Livewire\WithPagination;
class Photos extends Component
{
    use WithPagination;
    use WithFileUploads;
    
    #[Validate(['photos.*' => 'image|max:1024'])]
    public $saveMemory;
    public $modal_title = '행사사진 추가';
    public $title;
    public $date;
    public $photos = [];
    public $event_photos = [];

    public $photosModal;
    public $selected_photos = [];
    public $selected_event;

    public function saveMemories($id = null)
    {
        $this->reset(['modal_title', 'selected_event', 'title', 'date', 'photos', 'event_photos']);
        if($id !== null)
        {
            $this->selected_event = Event::find($id);
            if($this->selected_event)
            {
                $this->modal_title = '행사사진 수정';
                $this->title = $this->selected_event->title;
                $this->date = $this->selected_event->date;
                $this->event_photos = $this->selected_event->event_photos()->get();
            }
        }
        $this->saveMemory = true;
    }
    public function removeImg($index)
    {
        array_splice($this->photos, $index, 1);
    }
    public function submit()
    {
        $validated = $this->validate([ 
            'title' => 'required',
            'date' => 'required',
            'event_photos' => 'nullable',
            'photos' => 'nullable',
        ]);
        if(empty($this->event_photos) && empty($this->photos))
        {
            $this->addError('photos', '사진을 입력해 주세요!');
            return;
        }
        if($this->selected_event)
        {
            $this->selected_event->update(['title' => $this->title, 'date' => $this->date]);
        }
        else
        {
            $this->selected_event = Event::firstOrCreate(['title' => $this->title, 'date' => $this->date]);
        }
        if(!empty($this->photos))
        {
            foreach($this->photos as $photo)
            {
                $business_registration_path = $photo->storePublicly('events', ['disk' => 'public']);
                $this->selected_event->event_photos()->updateOrCreate(['img_path' => $business_registration_path]);
            }
        }
        $this->reset(['saveMemory', 'selected_event', 'title', 'date', 'photos', 'event_photos']);
    }
    public function deleteEvent($id)
    {
        $event = Event::find($id);
        
        if ($event) {
            foreach($event->event_photos()->get() as $photo)
            {
                Storage::delete('public/' . $photo->img_path);
                $photo->delete();
            }
            $event->delete();
        }
    }
    public function deleteImg($id)
    {
        $event_photo = EventPhoto::find($id);
        if($event_photo)
        {
            Storage::delete('public/' . $event_photo->img_path);
            $event_photo->delete();
        }
    }
    public function showMore($id)
    {
        $this->reset(['selected_photos']);
        $this->selected_event = Event::find($id);
        foreach ($this->selected_event->event_photos as $photo)
        {
            $this->selected_photos[] = $photo->img_path;
        }
        $this->photosModal = true;
    }
    public function render()
    {
        $events = Event::orderBy('date', 'desc')->with('first_event_photo')->paginate(12);
        return view('livewire.events.photos', ['events' => $events]);
    }
}
