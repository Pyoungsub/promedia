<?php

namespace App\Http\Livewire\Intro;

use Livewire\Component;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class ArticlesOfIncorporation extends Component
{
    public function render()
    {
        $articleFile = Jetstream::localizedMarkdownPath('articles-of-incorporation.md');
        return view('livewire.intro.articles-of-incorporation', [
            'articleFile' => Str::markdown(file_get_contents($articleFile)),
        ]);
    }
}