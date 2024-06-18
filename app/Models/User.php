<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

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

    public function schedulesAsDoctor()
    {
        return $this->hasMany(Schedule::class, 'doctor_id');
    }

    public function pets()
    {
        return $this->hasMany(Pet::class, 'customer_id');
    }

    public function schedulesAsCustomer()
    {
        return $this->hasMany(Schedule::class, 'customer_id');
    }
}
