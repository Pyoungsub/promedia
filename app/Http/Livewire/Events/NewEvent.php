<?php

namespace App\Http\Livewire\Events;

use Livewire\Component;
use App\Models\Schedule;

class NewEvent extends Component
{
    public $name;
    public $effective_date;
    public $due_date;
    public $from;
    public $to;
    public $place;
    public $description;

    public $addEventModal;
    
    public function addEvent()
    {
        $this->addEventModal = true;
    }
    
    public function submit($effective_date, $due_date, $from, $to, $name, $place, $description)
    {
        $this->admin_id = auth()->user()->admin->id;
        $this->effective_date = $effective_date;
        $this->due_date = $due_date;
        $this->from = date('H:i:s', strtotime($from));
        $this->to = date('H:i:s', strtotime($to));
        $this->name = $name;
        $this->place = $place;
        $this->description = $description;
        $validatedData = $this->validate([
            'admin_id' => 'required|exists:admins,id',
            'effective_date' => 'required|date_format:Y-m-d',
            'due_date' => 'required|date_format:Y-m-d',
            'from' => 'required|date_format:H:i:s',
            'to' => 'required|date_format:H:i:s',
            'name' => 'required|min:2',
            'place' => 'required|min:2',
            'description' => 'required|min:2',
        ]);
        Schedule::create($validatedData);
        $this->reset(['addEventModal', 'effective_date', 'due_date', 'from', 'to', 'name', 'place', 'description']);
    }
    public function render()
    {
        return view('livewire.events.new-event');
    }
}
