<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresentMember extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function partnership_member()
    {
        return $this->belongsTo(PartnershipMember::class);
    }
    public function member_role()
    {
        return $this->belongsTo(MemberRole::class);
    }
}
