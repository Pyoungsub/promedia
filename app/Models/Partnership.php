<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    use HasFactory;
    protected $guarded = [];
<<<<<<< HEAD
    public function consonant()
    {
        return $this->belongsTo(Consonant::class);
=======
    public function consonant_partnership()
    {
        return $this->hasOne(ConsonantPartnership::class);
    }
    public function members()
    {
        return $this->hasMany(PartnershipMember::class);
    }
    public function url()
    {
        return $this->hasOne(PartnershipUrl::class);
>>>>>>> bc662e7 (modified code)
    }
}
