<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    //

protected $fillable = [
'texte',
'email_client',
'projet_id',
];
/**
* Get the ad that owns the message.
*/
public function ad()
{
return $this->belongsTo(Projets::class);
}
}
