<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consonant extends Model
{
    use HasFactory;
    public function partnerships()
    {
        return $this->hasMany(Partnership::class);
    }
}
