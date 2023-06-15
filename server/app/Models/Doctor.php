<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = "doctors";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'specialite',
        'addressCabinet',
        'user_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class, 'specialite', 'name_specialite');
    }

    public function cabinets()
    {
        return $this->hasMany(Cabinet::class, 'id_doc');
    }
}
