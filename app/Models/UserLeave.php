<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLeave extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'type',
        'start_date',
        'end_date',
        'total_days',
        'remarks',
        'status'
    ]; 
}
