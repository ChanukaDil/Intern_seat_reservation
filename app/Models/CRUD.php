<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CRUD extends Authenticatable
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'Username',
        'Password', // Make sure 'password' is correctly formatted
        'Email',
        'NIC',
        'Birth',
        'university',
        'Uni_ID',
        'Position',
    ];

    // Hide sensitive fields when the model is serialized
    protected $hidden = [
        'Password', // Ensure the password is hidden when serializing
    ];

    /**
     * Set the user's password.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['Password'] = bcrypt($value); // Ensure 'Password' matches the fillable field name
    }
}
