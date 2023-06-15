<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinets extends Model
{
    use HasFactory;
    protected $table="cabinets";
    protected $primaryKey="id";
    protected $fillable = [
        'address',
        'phone',
        'id_doc',
    ];

    public function doctorByAddress()
    {
        return $this->hasOne(Doctor::class, 'address_cabinet', 'address');
    }

    public function doctorByPhone()
    {
        return $this->hasOne(Doctor::class, 'phone', 'phone');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doc','id');
    }
}
