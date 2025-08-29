<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id',
        'scholarship_id',
        'status',
        "nom",
        "prenom",
        "email",
        "age",
        "anneeDernierDiplome",
        "dernierDiplome",
        "ecole",
        "programmeInteresse",
        "motivation",

    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }
}
