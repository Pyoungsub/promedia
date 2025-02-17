<?php

namespace App\Http\Livewire\Events;

use Livewire\Component;
use App\Models\Schedule;
use Carbon\Carbon;
class Schedules extends Component
{
    public $firstDay;
    public $lastDay;
    public $schedules = [];
<<<<<<< HEAD

=======
>>>>>>> bc662e7 (modified code)
    public function getDaysOfMonth($year, $month)
    {
        $this->reset('schedules');
        $this->firstDay = Carbon::createFromDate($year, $month, 1)->startOfMonth()->format('Y-m-d');
        $this->lastDay = Carbon::createFromDate($year, $month, 1)->endOfMonth()->format('Y-m-d');
        $this->schedules = collect(Schedule::where('effective_date', '<=', $this->lastDay)
                                    ->where('due_date', '>=', $this->firstDay)
                                    ->get());
    }
    public function mount()
    {
        $this->getDaysOfMonth(Carbon::now()->year, Carbon::now()->month);
    }
    public function render()
    {
        return view('livewire.events.schedules');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> bc662e7 (modified code)
