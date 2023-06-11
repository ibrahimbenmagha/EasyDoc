<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinets extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone',
    ];

    public function doctorByAddress()
    {
        return $this->hasOne(Doctor::class, 'address_cabinet', 'address');
    }

    public function doctorByPhone()
    {
        return $this->hasOne(Doctor::class, 'phone', 'phone');
    }
}
