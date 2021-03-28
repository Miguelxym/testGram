<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //disable mass assignment
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}