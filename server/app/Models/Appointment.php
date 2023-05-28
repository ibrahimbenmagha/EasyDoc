<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_doc',
        'id_patient',
        'appointment_result',
        'appointment_day',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doc');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id_patient');
    }

    public function availability()
    {
        return $this->belongsTo(Availability::class, 'appointment_day');
    }
}
