<?php

namespace App\Http\Livewire\Boards;

use Livewire\Component;
use App\Models\General;

class GeneralArticle extends Component
{
    public $article;
    public $previousArticle;
    public $nextArticle;
    public $title;
    public $content;
    public function modify()
    {
        $validated = $this->validate([ 
            'title' => 'required',
            'content' => 'required',
        ]);
        if($this->article->user->id === auth()->user()->id)
        {
            $this->article->update(['title' => $this->title, 'content' => $this->content]);
        }
    }
    public function mount(General $id)
    {
        $allowedTags = '<a><br>';
        $this->article = $id;
        $this->previousArticle = $id->previous();
        $this->nextArticle = $id->next();
        $this->title = $id->title;
        $this->content = strip_tags($id->content, $allowedTags);
    }
    public function render()
    {
        return view('livewire.boards.general-article');
    }
}
