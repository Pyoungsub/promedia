<?php

namespace App\Http\Livewire\Boards;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Reference;
use Livewire\WithPagination;
class References extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $title;
    public $file;
    public $description;
    public $writeArticleModal;
    public function writeArticle()
    {
        $this->writeArticleModal = true;
    }
    public function save()
    {
        $validated = $this->validate([ 
            'title' => 'required',
            'file' => 'required|mimes:pdf,jpeg,jpg|max:2048',
            'description' => 'required',
        ]);
        auth()->user()->admin->references()->firstOrCreate(['title' => $this->title, 'file_path' => $this->file->storePublicly('references', ['disk' => 'public']), 'description' => $this->description]);
        $this->reset(['writeArticleModal', 'title', 'file', 'description']);
    }
    public function render()
    {
        $references = Reference::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.boards.references', ['references' => $references]);
    }
}
