<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function member_role()
    {
        return $this->belongsTo(MemberRole::class);
    }
    public function partnership_member()
    {
        return $this->belongsTo(PartnershipMember::class);
    }
}
