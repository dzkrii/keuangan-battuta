<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_name',
        'nim',
        'gender',
        'department_id',
        'batch_year',
        'phone_number',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
