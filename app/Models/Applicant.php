<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'first_name',
        'middle_name',
        'last_name',
        'sex',
        'address',
        'email',
        'phone',
    ];


    public function application()
    {
        return $this->belongsTo(Application::class);
    }
    

}
