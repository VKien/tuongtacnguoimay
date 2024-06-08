<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rule extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
    ];

    public function userRules()
    {
        return $this->hasMany(UserRule::class);
    }
}
