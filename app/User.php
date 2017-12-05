<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user';
    public $timestamps = false;
    protected $fillable = [
        'user_id','first_name','last_name','email','phone_number','username','is_active','authority',
    ];
    protected $primaryKey = 'user_id';
    /**
     * The attributes that should be hidden for arrays.
     * // sửa đi.. đi lấy cốc nước đã :))ok
     * @var array
     */
    protected $hidden = [
        'password','remember_token' // có khi nào do ở đây k

    ];
}
