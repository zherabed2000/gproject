<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'color'
    ];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function scopeFilter($q)
    {
        if (request()->filled('q') && request('q') != "") {
            $q->where('title', 'like', '%' . request('q') . '%');
        }
    }
}
