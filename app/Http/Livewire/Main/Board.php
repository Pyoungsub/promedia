<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\Schedule;
use App\Models\Announcement;

use Carbon\Carbon;
class Board extends Component
{
    public $firstDay;
    public $lastDay;
    public $schedules = [];
    public $events = [];

    public function getDaysOfMonth($year, $month)
    {
        $this->reset('events');
        $this->firstDay = Carbon::createFromDate($year, $month, 1)->startOfMonth()->format('Y-m-d');
        $this->lastDay = Carbon::createFromDate($year, $month, 1)->endOfMonth()->format('Y-m-d');
        $this->schedules = Schedule::where('effective_date', '<=', $this->lastDay)
                                    ->where('due_date', '>=', $this->firstDay)
                                    ->get();
        for($i = $this->firstDay; $i <= $this->lastDay; $i++)
        {
            if($this->schedules->where('effective_date', '<=' , $i)->where('due_date', '>=', $i)->first())
            {
                $this->events[] = ['date' => $i];
            }
        }
    }
    public function mount()
    {
        $this->getDaysOfMonth(Carbon::now()->year, Carbon::now()->month);
    }
    public function render()
    {
        $announcements = Announcement::orderBy('updated_at', 'desc')->take(5)->get();
        return view('livewire.main.board', ['announcements' => $announcements]);
    }
}
