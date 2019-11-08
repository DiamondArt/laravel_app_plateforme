<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abonnements extends Model
{
    public function user()
    {
        return $this->hasMany(User::class);
    }}
