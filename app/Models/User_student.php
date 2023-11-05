<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_student extends Model
{
    use HasFactory;
    protected $fillable=['name','email','mobile','place','dob'];
    protected $primaryKey='user_id';
    
}
