<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
        'profile_image', 'postal_code', 'address', 'building'
    ];

    protected $hidden = [
        'password',
    ];

    // 出品商品
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    // いいね
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // いいねした商品（重要）
    public function likedItems()
    {
        return $this->belongsToMany(Item::class, 'likes');
    }

    // コメント
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // 購入
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}                            