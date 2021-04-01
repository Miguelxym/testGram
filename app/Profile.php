<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //disable mass assignment
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/D1nEQHuuym1mbR6YsdietFhxJ4lORNPa0C9UUo4R.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
