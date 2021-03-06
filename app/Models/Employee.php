<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $fillable = [
        'name','email','position','image','phone','dob'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
