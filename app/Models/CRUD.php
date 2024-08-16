<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    use HasFactory;

    protected $fillable = [
        'Username',
        'Password',
        'Email',
        'NIC',
        'SLT_ID',
        'Birth',
        'university',
        'Uni_ID',
        'Position',
    ];

    /**
     * Set the user's password.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
