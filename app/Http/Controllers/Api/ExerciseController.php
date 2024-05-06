<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'Berhasil mendapatkan data',
            'data' => $exercises
        ]);
    }

    public function show($id)
    {
        $exercise = Exercise::find($id);
        $exercise->load('exerciseDetail');

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'Berhasil mendapatkan data',
            'data' => $exercise
        ]);
    }
}
