<?php

namespace App\Http\Livewire\Executive;

use Livewire\Component;
use App\Models\Term;
use App\Models\Member;
use App\Models\MemberRole;
use App\Models\Partnership;
class History extends Component
{
    public $terms;
    public $selected_term_id;
    public $selected_term;
    public $ordinal_number;
    public $from;
    public $to;
    public $roles;
    public $selected_member;
    public $name;
    public $company;
    public $role_id = '';
    public $modifyTermModal;
    public $addModal;
    public $modifyModal;
    public function updatedSelectedTermId($value)
    {
        $this->selected_term = Term::find($value);
    }
    public function modifyTerm()
    {
        $this->ordinal_number = $this->selected_term->ordinal_number;
        $this->from = $this->selected_term->from;
        $this->to = $this->selected_term->to;
        $this->modifyTermModal = true;
    }
    public function modifiedTerm()
    {
        $validated = $this->validate([ 
            'ordinal_number' => 'required|integer',
            'from' => 'required|digits:4|integer|min:1900|lte:to',
            'to' => 'required|digits:4|integer|min:1900|gte:from',
        ]);
        $this->selected_term->update([
            'ordinal_number' => $this->ordinal_number,
            'from' => $this->from,
            'to' => $this->to,
        ]);
        $this->reset(['ordinal_number', 'from', 'to', 'modifyTermModal']);
    }
    public function add()
    {
        $this->reset(['company', 'role_id', 'name']);
        $this->addModal = true;
    }
    public function added()
    {
        $validated = $this->validate([ 
            'role_id' => 'required|exists:member_roles,id',
            'name' => 'required|min:2',
            'company' => 'required|exists:partnerships,name',
        ]);
        $partnership = Partnership::where('name', $this->company)->first();
        $partnership_member = $partnership->members()->where('name', $this->name)->first();
        if(!$partnership_member)
        {
            $partnership_member = $partnership->members()->create([
                'name' => $this->name,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        $this->selected_member->update([
            'member_role_id' => $this->role_id,
            'partnership_member_id' => $partnership_member->id
        ]);
        $this->reset(['role_id', 'name', 'company', 'addModal']);
    }
    public function modify($id)
    {
        $this->resetValidation();
        $this->reset(['company', 'role_id', 'name']);
        $this->selected_member = Member::find($id);
        $this->role_id = $this->selected_member->member_role_id;
        $this->name = $this->selected_member->partnership_member->name;
        $this->company = $this->selected_member->partnership_member->partnership->name;
        $this->modifyModal = true;
    }
    public function modified()
    {
        $validated = $this->validate([ 
            'role_id' => 'required|exists:member_roles,id',
            'name' => 'required|min:2',
            'company' => 'required|exists:partnerships,name',
        ]);
        $partnership = Partnership::where('name', $this->company)->first();
        $partnership_member = $partnership->members()->where('name', $this->name)->first();
        if(!$partnership_member)
        {
            $partnership_member = $partnership->members()->create([
                'name' => $this->name,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        $this->selected_member->update([
            'member_role_id' => $this->role_id,
            'partnership_member_id' => $partnership_member->id
        ]);
        $this->reset(['role_id', 'name', 'company', 'modifyModal']);
    }
    public function mount()
    {
        $this->terms = Term::orderBy('ordinal_number', 'desc')->get();
        $this->selected_term = $this->terms->first();
        $this->selected_term_id = $this->selected_term->id;
        $this->roles = MemberRole::select('id', 'role')->get();
    }
    public function render()
    {
        $members = $this->selected_term->members()->get();
        return view('livewire.executive.history', ['members' => $members]);
    }
}
