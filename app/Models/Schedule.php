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
        'customer_id',
        'doctor_id',
        'status',
        'message',
    ];

    protected $hidden = [
    ];


    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

}
