<?php

namespace App\Http\Livewire\Events;

use Livewire\Component;
use App\Models\Schedule;
class Details extends Component
{
    public $schedule;
    public $name;
    public $effective_date;
    public $due_date;
    public $from;
    public $to;
    public $place;
    public $description;
    public $previousSchedule;
    public $nextSchedule;
    public function delete()
    {
        $this->schedule->delete();
        return redirect()->route('events.lists');
    }
    public function modify()
    {
        $this->from = date('H:i:s', strtotime($this->from));
        $this->to = date('H:i:s', strtotime($this->to));
        $validatedData = $this->validate([
            'effective_date' => 'required|date_format:Y-m-d',
            'due_date' => 'required|date_format:Y-m-d',
            'from' => 'required|date_format:H:i:s',
            'to' => 'required|date_format:H:i:s',
            'name' => 'required|min:2',
            'place' => 'required|min:2',
            'description' => 'required|min:2',
        ]);
        $this->schedule->update([
            'admin_id' => auth()->user()->admin->id,
            'effective_date' => $this->effective_date,
            'due_date' => $this->due_date,
            'from' => $this->from,
            'to' => $this->to,
            'name' => $this->name,
            'place' => $this->place,
            'description' => $this->description,
        ]);
    }
    public function mount(Schedule $id)
    {
        $this->schedule = $id;
        $this->name = $id->name;
        $this->effective_date = $id->effective_date;
        $this->due_date = $id->due_date;
        $this->from = $id->from;
        $this->to = $id->to;
        $this->place = $id->place;
        $this->description = $id->description;
        $this->previousSchedule = Schedule::where('id', '<', $id->id)->first();
        $this->nextSchedule = Schedule::where('id', '>', $id->id)->first();
    }
    public function render()
    {
        return view('livewire.events.details');
    }
}
