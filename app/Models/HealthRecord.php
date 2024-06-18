<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class HealthRecord extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'date',
        'pet_id',
        'doctor_id',
    ];

    protected $hidden = [
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }

}
