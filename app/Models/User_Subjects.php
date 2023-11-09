<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Subjects extends Model
{
    use HasFactory;
    protected $table = "user_subjects";
    public $timestamps = false;
}
