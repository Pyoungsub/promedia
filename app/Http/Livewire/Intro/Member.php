<?php

namespace App\Http\Livewire\Intro;

use Livewire\Component;
<<<<<<< HEAD

class Member extends Component
{
    public function render()
    {
        return view('livewire.intro.member');
=======
use App\Models\MemberRole;
use App\Models\Partnership;
use App\Models\PresentMember;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Member extends Component
{
    use WithFileUploads;
    public $roles;
    public $memberModal;
    public $selected_present_member_id;
    public $role_id = '';
    public $name = '';
    public $company = '';
    public $photo;
    public $img_path = '';
    public $photoPreview;
    public function addMember()
    {
        $this->reset(['selected_present_member_id', 'role_id', 'name', 'company', 'img_path', 'photo']);
        $this->memberModal = true;
    }
    public function modifyMember( $id )
    {
        $this->reset(['selected_present_member_id', 'role_id', 'name', 'company', 'img_path', 'photo']);
        $selected_present_member = PresentMember::find($id);
        $this->selected_present_member_id = $selected_present_member->id;
        $this->role_id = $selected_present_member->member_role_id;
        $this->name = $selected_present_member->partnership_member->name;
        $this->company = $selected_present_member->partnership_member->partnership->name;
        $this->img_path = $selected_present_member->partnership_member->img_path;
        $this->memberModal = true;
    }
    
    public function save()
    {
        $validated = $this->validate([ 
            'selected_present_member_id' => 'nullable|exists:present_members,id',
            'role_id' => 'required|exists:member_roles,id',
            'name' => 'required|min:2',
            'company' => 'required|exists:partnerships,name',
            'img_path' => 'required_with:selected_present_member_id',
            'photo' => 'required_if:selected_present_member_id,null|nullable',
        ]);
        if($this->selected_present_member_id)
        {
            
        }
        else
        {
            $partnership = Partnership::where('name', $this->company)->first();
            $partnership_member = $partnership->members()->firstOrCreate(['name' => $this->name]);
            if($this->photo)
            {
                if($partnership_member->img_path)
                {
                    Storage::delete('public/' . $partnership_member->img_path);
                }
                $img_path = $this->photo->storePublicly('member', ['disk' => 'public']);
                $partnership_member->update(['img_path' => $img_path]);
            }
            $present_member = $partnership_member->present_member()->where('partnership_member_id', $partnership_member->id)->first();
            if($present_member)
            {
                $partnership_member->present_member->update(
                    ['member_role_id' => $this->role_id]
                );
            }
            else
            {
                $partnership_member->present_member()->create(['member_role_id' => $this->role_id]);
            }
        }
        $this->reset(['selected_present_member_id', 'role_id', 'name', 'company', 'img_path', 'photo', 'memberModal']);
    }
    public function deleteMember($id)
    {
        PresentMember::find($id)->delete();
    }
    public function mount()
    {
        $this->roles = MemberRole::select('id', 'role')->get();
    }
    public function render()
    {
        $members = PresentMember::all();
        return view('livewire.intro.member', ['members' => $members]);
>>>>>>> bc662e7 (modified code)
    }
}
