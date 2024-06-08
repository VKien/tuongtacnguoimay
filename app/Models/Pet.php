<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'sex',
        'species',
        'age',
        'user_id',
    ];

    protected $hidden = [
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function healthRecord()
    {
        return $this->belongsTo(HealthRecord::class);
    }

}
