<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $guarded = [];
<<<<<<< HEAD
=======
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
>>>>>>> bc662e7 (modified code)
}
