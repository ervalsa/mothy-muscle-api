<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Push up',
                'description' => 'Latihan yang melibatkan penekanan tubuh ke atas dan ke bawah dengan menggunakan lengan dan dada. Ini adalah latihan klasik untuk kekuatan tubuh bagian atas, terutama dada, bahu, dan triceps.'
            ],
            [
                'title' => 'Squat',
                'description' => 'Latihan untuk memperkuat otot kaki dan pinggul. Anda melakukan squat dengan menekuk lutut dan menurunkan tubuh ke posisi duduk, lalu berdiri kembali. Latihan ini juga bagus untuk keseimbangan dan stabilitas.'
            ],
            [
                'title' => 'Plank',
                'description' => 'Latihan yang melibatkan otot inti (core). Anda menahan tubuh dalam posisi push-up tetapi dengan lengan bawah yang menahan berat badan. Ini memperkuat otot perut, punggung, dan bahu.'
            ],
            [
                'title' => 'Lunges',
                'description' => 'Latihan kaki yang melibatkan langkah maju dan menekuk lutut hingga kaki belakang hampir menyentuh lantai. Latihan ini membantu membangun kekuatan kaki dan stabilitas.'
            ],
            [
                'title' => 'Bicep-Curl',
                'description' => 'Latihan untuk memperkuat otot biceps di lengan. Anda melakukannya dengan mengangkat beban atau dumbbell ke arah bahu, lalu menurunkannya kembali. Cocok untuk meningkatkan kekuatan lengan.'
            ],
            [
                'title' => 'Mountain Climber',
                'description' => 'Latihan kardio dan kekuatan yang melibatkan gerakan cepat dengan membawa lutut ke arah dada secara bergantian dalam posisi push-up. Latihan ini meningkatkan detak jantung dan menguatkan otot kaki serta otot inti.'
            ]
        ];

        foreach ($data as $item) {
            Exercise::create($item);
        }
    }
}
