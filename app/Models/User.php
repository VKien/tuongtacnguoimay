<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'sex',
        'birthday',
        'hometown',
        'address',
        'phone',
        'degree',
    ];

    protected $hidden = [
        'password',
    ];

    public function userRules()
    {
        return $this->hasMany(UserRule::class);
    }
}
