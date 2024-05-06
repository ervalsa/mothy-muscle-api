<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $table = 'exercises';

    protected $fillable = [
        'title',
        'description'
    ];

    public function exerciseDetail()
    {
        return $this->hasOne(ExerciseDetail::class);
    }
}
