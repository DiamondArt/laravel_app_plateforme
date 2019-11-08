<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;


class User extends Authenticatable
{
    use Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    

    // un professionnel peut avoir plusieurs projets

    public function projets()
    {
        return $this->hasMany(Projets::class);
    }
        // un professionnel peut avoir plusieurs categories

    public function category()
    {
        return $this->hasMany(Category::class);
    }
            // un professionnel peut avoir plusieurs abonnements

    public function abonnement()
    {
        return $this->hasMany(Abonnements::class);
    }
                // un professionnel peut avoir une image 


    public function hasRole($role)
{
    return User::where('role', $role)->get();
}
}
