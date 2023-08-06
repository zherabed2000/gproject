<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{

    use SoftDeletes;

    protected $guarded = [];
    protected $casts = [
        'id' => 'string',
        'data' => 'array',
        'read_at' => 'datetime',
    ];

    public function scopeSearch($q, $request)
    {
        $query = $q;
//        if (!empty($request->search['value'])) {
//            $search = '%' . $request->search['value'] . '%';
//            $query = $query->whereTranslationLike('name', $search);
//        }

        return $query;
    }

    public function instance()
    {
        return $this->morphTo('instance');
    }

    public function notifiable()
    {
        return $this->morphTo('notifiable');
    }

}
