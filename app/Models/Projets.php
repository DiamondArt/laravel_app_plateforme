<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Projets extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'texte',
        'user_id',
        'client_name',
        'email_client',
        'date_envoie',
        'active',
        'statut_client',
    ];
    /**
* Get the photos for the project.
*/
public function photos()
{
return $this->hasMany(Medias::class);
}
/**
* Get the user for the project.
*/
public function professionnel()
{
return $this->belongsTo(User::class);
}
}
