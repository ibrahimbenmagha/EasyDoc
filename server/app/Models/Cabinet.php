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

    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'adress_cabinet', 'address');
    }
}
