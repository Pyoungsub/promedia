<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consonant extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function consonant_partnerships()
    {
        return $this->hasMany(ConsonantPartnership::class);
    }
}
