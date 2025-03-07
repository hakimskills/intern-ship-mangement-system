<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'general_discipline', 'work_skills', 'initiative', 'imagination', 'knowledge'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
