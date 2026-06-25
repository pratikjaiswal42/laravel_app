<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    Protected $fillable = ['title', 'content', 'meta'];

    Protected function casts(): array
    {
        return [
            'meta' => 'array',
        ];
    }

    public function user1(){
        return $this->belongsTo(User::class);
    }
}
