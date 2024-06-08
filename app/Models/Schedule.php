<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'date',
        'service_id',
    ];

    protected $hidden = [
    ];


    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
