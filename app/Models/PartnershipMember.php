<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnershipMember extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function partnership()
    {
        return $this->belongsTo(Partnership::class);
    }
    public function present_member()
    {
        return $this->hasOne(PresentMember::class);
    }
}
