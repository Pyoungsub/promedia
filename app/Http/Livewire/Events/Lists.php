<?php

namespace App\Http\Livewire\Events;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Schedule;
class Lists extends Component
{
    use WithPagination;
    
    public function render()
    {
        $schedules = Schedule::orderBy('effective_date', 'desc')->paginate(10);
        return view('livewire.events.lists', ['schedules' => $schedules]);
    }
}
