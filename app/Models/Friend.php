<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Friend extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'friend_id',
        'is_blocked'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function friend()
    {
        return $this->belongsTo(User::class , 'friend_id');
    }
}
