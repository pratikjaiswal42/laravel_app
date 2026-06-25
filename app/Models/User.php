<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])] 
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function passport(){ //  one to one
        return $this->hasOne(passport::class);
    }

    public function posts(){ //  one to many
        return $this->hasMany(Post::class);
    }

    // public function latest_post(){ //  one of many
    //     return $this->hasOne(Post::class)->latestOfMany();
    // }

    // public function latest_Many_post(){ // one to many
    //     return $this->hasOneThrough(Post::class);
    // }
 
    // public function latest_one_Many_post(){ //  many to many
    //     return $this->belongsToMany(Post::class);
    // }
}
