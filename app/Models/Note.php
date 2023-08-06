<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'category_id',
        'content',
        'is_favorite',
        'reminder_date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->withTrashed();
    }

    public function users()
    {
        return $this->belongsToMany(User::class , 'favourites' , 'note_id' , 'user_id');
    }

    public function isUserFav()
    {
        return $this->users()->where('user_id' , auth()->id())->exists();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
