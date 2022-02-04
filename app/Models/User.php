<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Impersonate;
    use LogsActivity;

    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'firstName',
        'lastName',
        'username',
        'email',
        'password',
        'status',
        'verification_code'
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

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }


    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    function teachers()
    {
        return $this->hasMany('User', 'group_message_id');
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);

    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name', 'text']);
        // Chain fluent methods for configuration options
    }

}
