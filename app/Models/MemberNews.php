<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberNews extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function previous()
    {
        return self::where('id', '<', $this->id)->orderBy('id', 'desc')->first();
    }
    public function next()
    {
        return self::where('id', '>', $this->id)->orderBy('id', 'asc')->first();
    }
}
