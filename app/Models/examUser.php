<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examUser extends Model
{
    protected $table = "exam";
    protected $primaryKey = 'id';
    protected $fillable = ['Assigned', 'Email', 'Contact', 'Salary'];
}
