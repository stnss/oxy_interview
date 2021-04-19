<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'author_name'
    ];

    public function hasbooks() {
        return $this->belongsToMany(Book::class, 'book_authors', 'author_id', 'book_id');
    }
}
