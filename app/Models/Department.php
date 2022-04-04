<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    public function department() {
        $this->hasOne(Department::class, 'department_name', 'name');
    }
}