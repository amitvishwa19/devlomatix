<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Lab404\Impersonate\Models\Impersonate;

class User extends Authenticatable
{
    use HasFactory;
    use Impersonate;

    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function teachers()
    {
        return $this->hasMany('User', 'group_message_id');
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);

    }

}
