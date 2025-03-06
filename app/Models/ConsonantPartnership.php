<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsonantPartnership extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function consonant()
    {
        return $this->belongsTo(Consonant::class);
    }
    public function partnership()
    {
        return $this->belongsTo(Partnership::class);
    }
}
