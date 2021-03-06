<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\DatesTranslator;

class Task extends Model
{
    use DatesTranslator;

    public function sprint()
    {
        return $this->belongsTo('App\Models\Sprint');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function observations()
    {
        return $this->hasMany('App\Models\Observation');
    }
}
