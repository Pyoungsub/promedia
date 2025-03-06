<?php

namespace App\Http\Livewire\Boards;

use Livewire\Component;
use App\Models\Reference;
use Illuminate\Support\Facades\Storage;
class Articles extends Component
{
    public $article;
    public $previousReference;
    public $nextReference;
    
    public function download()
    {
        return Storage::disk('public')->download($this->article->file_path);
    }
    public function delete()
    {
        Storage::delete('public/'.$this->article->file_path);
        $this->article->delete();
        return redirect()->route('boards.references');
    }
    public function mount(Reference $id)
    {
        $this->article = $id;
        $this->previousReference = $id->previous();
        $this->nextReference = $id->next();
    }
    public function render()
    {
        return view('livewire.boards.articles');
    }
}
