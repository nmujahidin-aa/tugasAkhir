<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "books";
    protected $fillable = [
        'user_id',
        'file',
        'title',
        'slug',
        'description',
        'published_at',
        'author',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
