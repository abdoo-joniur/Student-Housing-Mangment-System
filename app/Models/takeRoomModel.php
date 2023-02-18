<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class takeRoomModel extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'phone',
        'address',
        'rel_name',
        'rel_phone',
        'rel_address',
        'rel_id',
        'college_id',
        'college_Department',
        'level',
        'StudentID',
        'room_no',
        'section_id',
    ];
}
