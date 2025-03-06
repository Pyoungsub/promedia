<?php

namespace App\Http\Livewire\Boards;

use Livewire\Component;
use App\Models\General;
use Livewire\WithPagination;
class Generals extends Component
{
    use WithPagination;
    public $sort = '';
    public $search = '';

    public $writeArticleModal;
    public $title;
    public $content;
    public function writeArticle()
    {
        $this->writeArticleModal = true;
    }

    public function save()
    {
        $validated = $this->validate([ 
            'title' => 'required',
            'content' => 'required',
        ]);
        auth()->user()->generals()->firstOrCreate(['title' => $this->title, 'content' => $this->content]);
        $this->reset(['writeArticleModal', 'title', 'content']);
    }
    public function articleSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $sort = $this->sort;
        $generals = General::where('title', 'like', '%'.$this->search.'%')
        ->when($sort, function ($query, $sort) {
            return $query->orWhere('content', 'like', '%'.$this->search.'%');
        })
        ->orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.boards.generals', ['generals' => $generals]);
    }
}
