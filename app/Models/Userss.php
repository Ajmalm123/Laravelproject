<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userss extends Model
{
    protected $guarded=[];
    use HasFactory;
    
    const UPDATED_AT = null;
   
    public function userDesignation() {
        return $this->belongsTo(Designation::class, 'designation_name', 'name');
    }

    public function userDepartment() {
        return $this->belongsTo(Department::class, 'department_name', 'name');
    }
    
}
