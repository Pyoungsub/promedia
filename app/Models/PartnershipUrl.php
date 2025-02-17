<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnershipUrl extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function partnership()
    {
        return $this->belongsTo(Partnership::class);
    }
}
