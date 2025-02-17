<?php

namespace App\Http\Livewire\Boards;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Announcement;
use Livewire\WithPagination;
class Announcements extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $sort = '';
    public $search = '';

    public $writeAnnouncementModal;
    public $title;
    public $description;
    public $file;
    public function writeAnnouncement()
    {
        $this->writeAnnouncementModal = true;
    }
    public function save()
    {
        $validated = $this->validate([ 
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable|file'
        ]);
        $store = auth()->user()->admin->announcements()->firstOrCreate(['title' => $this->title, 'description' => $this->description]);
        if($store && $this->file)
        {
            $file_path = $this->file->storePublicly('announcement', ['disk' => 'public']);
            $store->announcementFile()->create(['file_path' => $file_path]);
        }
        $this->reset(['writeAnnouncementModal', 'title', 'description', 'file']);
    }
    public function announceSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $sort = $this->sort;
        $announcements = Announcement::where('title', 'like', '%'.$this->search.'%')
        ->when($sort, function ($query, $sort) {
            return $query->orWhere('description', 'like', '%'.$this->search.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('livewire.boards.announcements', ['announcements' => $announcements]);
    }
}
