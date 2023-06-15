<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    use HasFactory;
    protected $table = "patients";
    protected $primaryKey = "id";
    protected $fillable = [
        'name', 
        'surname',
        'email',
        'phone',
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
