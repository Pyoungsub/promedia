<?php

namespace App\Http\Livewire\Boards;

use Livewire\Component;

use App\Models\MemberNews as News;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class MemberNews extends Component
{
    use WithPagination;

    public $sort = '';
    public $search = '';
    public $selected_member_news;
    public $title = '';
    public $file;
    public $content;
    public $writeMemberNewsModal;
    public function writeNews()
    {
        $this->reset(['title', 'content']);
        $this->dispatchBrowserEvent('modal-opened', ['content' => '']);
        $this->writeMemberNewsModal = true;
    }
    public function save()
    {
        $validated = $this->validate([ 
            'title' => 'required',
            'content' => 'required',
            'file' => 'nullable|file'
        ]);
        if($this->selected_member_news)
        {
            //$this->content = $this->moveImageAndUpdateContent($this->content, $this->origin_content);
        }
        else
        {
            $this->content = $this->moveImageAndUpdateContent($this->content);
            $store = auth()->user()->admin->member_news()->firstOrCreate(['title' => $this->title, 'content' => $this->content]);            
        }
        $this->reset(['writeMemberNewsModal', 'title', 'content', 'file']);
    }
    public function memberNewsSearch()
    {
        $this->resetPage();
    }
    public function moveImageAndUpdateContent($content)
    {
        $yymmFolder = \Carbon\Carbon::now()->format('ym');
        preg_match_all('/<img[^>]+src="([^"]+)"/i', $content, $newImages);
        if (!empty($newImages[1])) {
            foreach ($newImages[1] as $imagePath) {
                // Get the image file name
                $filename = basename($imagePath);
                $newPath = "member_news/{$yymmFolder}/" . $filename;
                // Move only if it's in the temporary folder
                if (Storage::disk('public')->exists('tmp/' . $filename)) {
                    $this->img_path = $newPath;
                    Storage::disk('public')->move('tmp/' . $filename, $newPath);
                }
                // Replace only new image paths in the content
                $content = str_replace($imagePath, Storage::url($newPath), $content);
            }
        }
        return $content;
    }
    public function render()
    {
        $sort = $this->sort;
        $member_news = News::where('title', 'like', '%'.$this->search.'%')
        ->when($sort, function ($query, $sort) {
            return $query->orWhere('content', 'like', '%'.$this->search.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('livewire.boards.member-news', ['member_news' => $member_news]);
    }
}
