<?php

namespace App\Http\Livewire\Boards;

use Livewire\Component;
use App\Models\Announcement;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
class Announces extends Component
{
    use WithFileUploads;

    public $announce;
    public $previousAnnouncement;
    public $nextAnnouncement;
    public $title;
    public $description;
    public $announcePopupModal;

    public $modal_title = '팝업 추가';
    public $photo;
    public $popup_path;
    public $end_date;

    public function modify($title, $content)
    {
        $announce = Announcement::find($this->announce->id);
        $announce->update(['title' => $title, 'description' => $content]);
        $this->announce = $announce;
    }
    public function delete()
    {
        if($this->announce->announcementFile)
        {
            Storage::delete('public/' . $this->announce->announcementFile->file_path);
            $this->announce->announcementFile->delete();
        }
        if($this->announce->announcementModal)
        {
            Storage::delete('public/' . $this->announce->announcementModal->img_path);
            $this->announce->announcementModal->delete();
        }
        $this->announce->delete();
        return redirect()->route('boards.announcements');
    }
    public function showPopup()
    {
        $this->reset(['modal_title', 'popup_path', 'end_date']);
        if($this->announce->announcementModal)
        {
            $this->modal_title = '팝업 수정';
            $this->popup_path = $this->announce->announcementModal->img_path;
            $this->end_date = $this->announce->announcementModal->end_date;
        }
        $this->announcePopupModal = true;
    }
    public function save()
    {
        $validated = $this->validate([ 
            'photo' => 'required_without:popup_path|image',
            'end_date' => 'required|date',
        ]);
        if($this->photo && $this->popup_path)
        {
            Storage::delete('public/' . $this->popup_path);
        }
        if($this->photo)
        {
            $this->popup_path = $this->photo->storePublicly('popup', ['disk' => 'public']);
        }
        $this->announce->announcementModal()->updateOrCreate(
            ['announcement_id' => $this->announce->id],
            ['img_path' => $this->popup_path, 'end_date' => $this->end_date],
        );
        $this->reset(['announcePopupModal', 'modal_title', 'photo', 'popup_path', 'end_date']);
    }
    public function mount(Announcement $id)
    {
        $allowedTags = '<a><br>';
        $this->announce = $id;
        $this->previousAnnounce = $id->previous();
        $this->nextAnnounce = $id->next();
        $this->title = $id->title;
        $this->description = strip_tags($id->description, $allowedTags);
    }
    public function render()
    {
        return view('livewire.boards.announces');
    }
}
