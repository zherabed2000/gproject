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
       
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}