<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $table = "specialities";
    protected $primaryKey = 'name_specialite';
    public $incrementing = false;
    protected $fillable = ['name_specialite'];
}
