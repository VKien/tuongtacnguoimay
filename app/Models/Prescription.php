<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prescription extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'health_record_id',
    ];

    protected $hidden = [
    ];

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

    public function healthRecord()
    {
        return $this->belongsTo(HealthRecord::class);
    }

}
