<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blotter extends Model
{

    protected $fillable = [
        'user_id',
        'blotter_date',
        'complainant_name',
        'complainant_address',
        'complainant_contact',
        'complainant_age',
        'respondent_name',
        'respondent_address',
        'respondent_contact',
        'respondent_age',
        'complaint_type',
        'incident_description',
        'reporter_signature',
        'reporter_name',
        'report_date',
        'report_time',
        'status',
    ];

    protected $casts = [
        'blotter_date' => 'date',
        'report_date' => 'date',
        'report_time' => 'datetime',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
