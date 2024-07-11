<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Consonant;
use App\Models\Partnership;
class Partners extends Component
{
    public $selected_consonant_id = 1;
    public $consonants;
    public function changeConsonant($id)
    {
        $this->selected_consonant_id = $id;
    }
    public function mount()
    {
        $this->consonants = Consonant::all();
    }
    public function render()
    {
        $partnerships = Partnership::where('consonant_id', $this->selected_consonant_id)->orderBy('name')->take(10)->get();
        return view('livewire.partners', ['partnerships' => $partnerships]);
    }
}
