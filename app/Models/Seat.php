<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = ['seat_number', 'date', 'booked', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
