<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisors extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone' ,
        'section_id',
    ];

    public function section(){
        return $this->belongsTo(section::class ,'section_id' ,'id');
    }

}
