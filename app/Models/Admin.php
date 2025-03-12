<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function references()
    {
        return $this->hasMany(Reference::class);
    }
    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }
    public function member_news()
    {
        return $this->hasMany(MemberNews::class);
    }
    public function medias()
    {
        return $this->hasMany(Media::class);
    }
    public function pdfs()
    {
        return $this->hasMany(Pdf::class);
    }
}
