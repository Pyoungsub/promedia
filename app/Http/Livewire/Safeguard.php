<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class Safeguard extends Component
{
    public function render()
    {
        $articleFile = Jetstream::localizedMarkdownPath('safeguard.md');
        return view('livewire.safeguard', [
            'article' => Str::markdown(file_get_contents($articleFile)),
        ]);
    }
}
