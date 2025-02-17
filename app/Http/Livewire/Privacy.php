<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;
class Privacy extends Component
{
    public function render()
    {
        $articleFile = Jetstream::localizedMarkdownPath('policy.md');
        return view('livewire.privacy', [
            'article' => Str::markdown(file_get_contents($articleFile)),
        ]);
    }
}
