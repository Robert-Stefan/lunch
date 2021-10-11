<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function placelists() {
        return $this->hasMany('App\Placelist');
    }
}
