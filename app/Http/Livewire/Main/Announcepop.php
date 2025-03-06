<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\AnnouncementModal;
use Carbon\Carbon;
class Announcepop extends Component
{
    public $announces = [];
    public function mount()
    {
        $today = Carbon::today();
        $this->announces = collect(AnnouncementModal::whereDate('end_date', '>', $today->format('Y-m-d'))->get());
    }
    public function render()
    {
        return view('livewire.main.announcepop');
    }
}
