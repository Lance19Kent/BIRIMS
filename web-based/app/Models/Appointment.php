<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'diagnostic_service',
        'appointment_date',
        'appointment_time',
        'symptoms',
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'status',
        'doctor_name',
        'doctor_specialty',
    ];

    protected $casts = [
        'appointment_date' => 'date',
        'appointment_time' => 'datetime',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accessor for formatted date and time
    public function getFormattedDateTimeAttribute()
    {
        return $this->appointment_date->format('F d, Y') . ' at ' . 
               Carbon::parse($this->appointment_time)->format('g:i A');
    }

    // Accessor for full name
    public function getFullNameAttribute()
    {
        return trim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }
}
