<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Consonant;
use App\Models\Partnership;
use App\Models\ConsonantPartnership;
use Livewire\WithPagination;
class Partners extends Component
{
    use WithPagination;

    public $perPage = 48;

    protected $listeners = ['load-more' => 'loadMore'];

    public $selected_consonant_id = 1;
    public $consonants;

    public function changeConsonant($id)
    {
        $this->selected_consonant_id = $id;
        $this->reset(['perPage']);
    }
    public function loadMore()
    {
        $this->perPage += 48;
    }
    public function mount()
    {
        $this->consonants = collect(Consonant::all());
    }
    public function render()
    {
        $consonant_partnerships = ConsonantPartnership::where('consonant_id', $this->selected_consonant_id)
        ->whereHas('partnership', function($query) {
            $query->has('url')->whereNotNull('img_path');
        })->paginate($this->perPage);
        return view('livewire.partners', ['consonant_partnerships' => $consonant_partnerships]);
    }
}