<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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

    public function section(){
        return $this->belongsTo(section::class ,'section_id' ,'id');
    }

    public function college(){
        return $this->belongsTo(College::class ,'college_id' ,'id');
    }

    public function scopeSearch($query,$term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('name','like',$term)
            ->orWhere('room_no','like',$term);
        });
    }

}
