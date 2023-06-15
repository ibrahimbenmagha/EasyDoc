<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;
    protected $table = "availability";
    protected $primaryKey = "vailability";
    protected $fillable = [
        'id_doc',
        'day_of_week',
        'start_time',
        'end_time',
        'available',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doc');
    }
}
