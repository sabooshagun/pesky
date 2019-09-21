<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','from');
    }

    public function userTo()
    {
        return $this->belongsTo('App\User','to','id');
    }

    public function userFrom()
    {
        return $this->belongsTo('App\User','from','id');
    }
}
