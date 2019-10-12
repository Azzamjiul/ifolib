<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $guarded=[''];

    public function user() {
        return $this->belongsTo('App\User', 'contributor_id');
    }

    public function collection()
    {
        return $this->belongsTo('App\Collection', 'collection_id');
    }
}
