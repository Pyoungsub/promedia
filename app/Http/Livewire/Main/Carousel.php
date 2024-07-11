<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

class Carousel extends Component
{
    public function render()
    {
        $this->dispatchBrowserEvent('jquery');
        return view('livewire.main.carousel');
    }
}
