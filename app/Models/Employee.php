<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'birth_date',
        'date_hired',
        'department_id',
        'position',
        'salary',
        'email',
        'phone',
        'sex',
    ];


    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    protected $casts = [
        'birth_date' => 'date', 
    ];

    public function age(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::parse($this->birth_date)->age,
        );
    }

}
