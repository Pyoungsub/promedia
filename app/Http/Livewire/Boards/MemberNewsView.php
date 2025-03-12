<?php

namespace App\Http\Livewire\Boards;

use Livewire\Component;
use App\Models\MemberNews;
use Illuminate\Support\Facades\Storage;

class MemberNewsView extends Component
{
    public $member_news;
    public $previous_member_news;
    public $next_member_news;
    public $title;
    public $content;
    public $origin_content;
    public $froala_editor_content;
    public function delete()
    {
        preg_match_all('/<img[^>]+src="([^"]+)"/i', $this->origin_content, $images);
        if (!empty($images[1])) {
            $firstImageProcessed = false;
            foreach ($images[1] as $imagePath) {
                // Get the image file name
                Storage::delete('public/'.str_replace('/storage/', '', $imagePath));
            }
        }
        $this->member_news->delete();
        return redirect()->route('boards.member-news');
    }
    public function modify()
    {
        $originalImages  = $this->extractImagePaths($this->origin_content);
        $modifiedImages = $this->extractImagePaths($this->froala_editor_content);
        $imagesToDelete = array_diff($originalImages, $modifiedImages);        
        foreach ($imagesToDelete as $image) {
            Storage::delete('public/'.str_replace('/storage/', '', $image));
        }
        $this->member_news->update(['content' => $this->moveImageAndUpdateContent($this->froala_editor_content)]);
        $modified_content = $this->member_news->content;
        //$newImagesToStore = array_diff($modifiedImages, $originalImages);
        /*
        foreach ($newImagesToStore as $image) {
            // Example: Log new images or process further
            \Log::info("New image detected: " . $image);
        }
        */
        $this->content = str_replace('fr-fic fr-dib', 'mx-auto', $modified_content);
        $this->origin_content = $modified_content;
        $this->froala_editor_content = $modified_content;
        
    }
    function extractImagePaths($content) {
        preg_match_all('/<img[^>]+src="([^"]+)"/i', $content, $matches);
        return array_unique($matches[1]); // Remove duplicates
    }
    public function moveImageAndUpdateContent($content)
    {
        $yymmFolder = \Carbon\Carbon::now()->format('ym');
        // Extract all image URLs from the new content
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
    public function mount(MemberNews $id)
    {
        //$allowedTags = '<a><br><img>';
        //$this->content = strip_tags($id->content, $allowedTags);
        $this->member_news = $id;
        $this->previous_member_news = $id->previous();
        $this->next_member_news = $id->next();
        $this->title = $id->title;
        $this->content = str_replace('fr-fic fr-dib', 'mx-auto', $id->content);
        $this->origin_content = $id->content;
        $this->froala_editor_content = $id->content;
    }
    public function render()
    {
        return view('livewire.boards.member-news-view');
    }
}
