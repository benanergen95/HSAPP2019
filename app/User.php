<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
=======
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7

class User extends Authenticatable
{
    use Notifiable;

<<<<<<< HEAD
=======
    protected $table ='users';
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password',
=======
        'fname', 'lname', 'email','email_verified_at', 'password', 'currentChild','pType'
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

<<<<<<< HEAD
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
=======


}

>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
