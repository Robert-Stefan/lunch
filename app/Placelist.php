<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placelist extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'day_id',
        'content'
    ];

    public function day() {
        return $this->belongsTo('App\Day');
    }
}
