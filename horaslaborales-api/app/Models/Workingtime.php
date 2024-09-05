<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workingtime extends Model
{
    use HasFactory;

    protected $fillable = ['student_cif', 'student_name', 'hrs_reached', 'hour_num', 
    'hr_event', 'hr_registered_date'];
}
