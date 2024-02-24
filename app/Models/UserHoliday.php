<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHoliday extends Model
{
    use HasFactory;
    protected $table="users_holidays";

    protected $fillable=[
        'title',
        'start_date',
        'end_date',
        'description',
        'days',

    ];
}
