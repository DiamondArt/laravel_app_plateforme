<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    public function user()
    {
        return $this->hasMany(User::class);
    }
}
