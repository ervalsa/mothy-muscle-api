<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ExerciseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function store(Request $request, $exercise_id)
    {
        $request->validate([
            'photo' => 'required|image|max:2048'
        ]);

        $exerciseDetail = ExerciseDetail::where('exercise_id', $exercise_id)->first();


        if (!$exerciseDetail) {
            return response()->json([
                'code' => 404,
                'status' => 'error',
                'message' => 'Tidak dapat menambahkan foto, tidak menemukan latihan',
            ]);
        }

        if ($request->hasFile('photo')) {
            if ($exerciseDetail->photo_path && Storage::exists($exerciseDetail->photo_path)) {
                Storage::delete($exerciseDetail->photo_path);
            }

            $path = $request->file('photo')->store('public/exercise_photos');
            $exerciseDetail->photo_path = $path;
            $exerciseDetail->save();

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'message' => 'Login berhasil',
                'data' => [
                    'exercise_id' => $exercise_id,
                    'photo_path' => Storage::url($path)
                ]
            ]);
        }
    }
}
