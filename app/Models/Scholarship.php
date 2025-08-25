<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $fillable = [
        'name',
        'country',
        'university',
        'domains',
        'level',
        'amount',
        'flagUrl',
        'advantages',
        'eligibilityConditions',
        'deadline',
        'applicationProcess',
        'requiredDocuments',
        'contactInfo',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'deadline' => 'datetime',
    ];
}
