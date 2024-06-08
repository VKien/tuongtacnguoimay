<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends BaseModel

{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
    ];

    protected $hidden = [
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
