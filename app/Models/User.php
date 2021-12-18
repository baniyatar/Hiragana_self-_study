<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'userid';
    protected $fillable = [
        'userid',
        'username',
        'password', 
        'email',
        'firstname',
        'surname',
        'city',
        'country',
        'payment',
        ];
}
