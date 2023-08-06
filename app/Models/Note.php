<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
        'user_id',
        'attachments',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->withTrashed();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'favourites', 'note_id', 'user_id');
    }

    public function sharedUsers()
    {
        return $this->belongsToMany(User::class, 'note_shares', 'note_id', 'user_id');
    }

    public function isUserFav()
    {
        return $this->users()->where('user_id', auth()->id())->exists();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter($q)
    {

        if (request()->filled('search') && request()->get('search') != "") {
            $search = request()->get('search');
            $q->where('name', 'LIKE', "%{$search}%")
                ->orWhere('content', 'LIKE', "%{$search}%");
        }
    }

    public function scopeVisible(Builder $query): Builder
    {
        return $query->where('user_id', auth()->id())
            ->orWhereHas('sharedUsers', function ($qq) {
                $qq->where('id', auth()->id());
        });
    }
}
