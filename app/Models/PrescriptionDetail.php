<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrescriptionDetail extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'prescription_id',
        'medicine_id',
        'quantity',
    ];

    protected $hidden = [
    ];

    public function prescription()
    {
        return $this->belongsTo(Prescription::class);
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
