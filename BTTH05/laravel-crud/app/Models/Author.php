<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // public static function boot()
    // {
    //     parent::boot();

    //     static::deleting(function ($author) {
    //         $author->books()->delete();
    //     });
    // }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
