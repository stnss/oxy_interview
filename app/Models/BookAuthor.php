<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'book_id'
    ];

    public $timestamps = false;

    // public function settings()
    // {
    //     return $this->belongsTo(Setting::class);
    // }

    // public function employee()
    // {
    //     return $this->hasMany(PermissionRole::class, 'role_id', 3);
    // }

    public function hasperm()
    {
        return $this->hasMany(Author::class, 'book_authors');
    }
}
