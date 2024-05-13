<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseDetail extends Model
{
    use HasFactory;

    protected $table = 'exercise_detail';

    protected $fillable = [
        'exercise_id',
        'instruction',
        'calories_burned_description',
        'photo_path'
    ];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}
