<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class EmailAddressCollection extends Component
{
    public function render()
    {
        $articleFile = Jetstream::localizedMarkdownPath('prohibition-of-unauthorized-collection-of-email-address.md');
        return view('livewire.email-address-collection',['article' => Str::markdown(file_get_contents($articleFile)),]);
    }
}
