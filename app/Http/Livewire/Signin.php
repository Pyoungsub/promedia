<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;
class Signin extends Component
{
    public $title;
    public $content;
    public $termsModal;
    public function checkTerms($terms)
    {
        if($terms == 'terms')
        {
            $this->title = '이용약관';
            $this->content = Str::markdown(file_get_contents(Jetstream::localizedMarkdownPath('policy.md')));
        }
        else
        {
            $this->title = '개인정보 취급방침';
            $this->content = Str::markdown(file_get_contents(Jetstream::localizedMarkdownPath('articles-of-incorporation.md')));
        }
        $this->termsModal = true;
    }
    public function agree(Request $request)
    {
        $request->session()->put('agreed_to_terms', [
            'value' => true,
            'expires_at' => now()->addMinutes(1)
        ]);
        return redirect()->route('register');
    }
    public function render()
    {
        return view('livewire.signin');
    }
}
