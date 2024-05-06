<?php

namespace Database\Seeders;

use App\Models\ExerciseDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'exercise_id' => 1,
                'instruction' => 'Mulailah dengan posisi plank, dengan tangan sejajar dengan bahu dan kaki lurus ke belakang. Jaga tubuh Anda lurus dan kencangkan otot inti. Turunkan tubuh dengan menekuk siku, pertahankan siku dekat dengan tubuh. Saat dada mendekati lantai, dorong kembali tubuh Anda ke atas hingga lengan lurus. Ulangi langkah-langkah di atas sebanyak 20 kali dengan ritme yang stabil.',
                'calories_burned_description' => 'Melakukan 20 push-up diperkirakan membakar antara 6 hingga 10 kalori, tergantung pada berat badan, tingkat intensitas, dan faktor kebugaran lainnya.'
            ],
            [
                'exercise_id' => 2,
                'instruction' => 'Berdirilah dengan kaki selebar bahu dan jari-jari kaki mengarah sedikit keluar. Jaga punggung tetap lurus dan kencangkan otot inti. Mulailah menekuk lutut dan turunkan tubuh Anda, seolah-olah Anda sedang duduk di kursi khayalan. Turunkan hingga paha sejajar dengan lantai atau sedikit lebih rendah, dengan lutut sejajar dengan jari-jari kaki. Dorong kembali tubuh Anda ke atas hingga berdiri dengan menggunakan otot kaki. Ulangi langkah-langkah di atas sesuai kebutuhan, menjaga ritme yang stabil.',
                'calories_burned_description' => 'Kalori yang dibakar saat melakukan squat bervariasi berdasarkan faktor-faktor seperti berat badan, kecepatan, dan intensitas latihan. Sebagai perkiraan umum, satu squat bisa membakar antara 0,2 hingga 0,4 kalori per/squatnya.'
            ],
            [
                'exercise_id' => 3,
                'instruction' => 'Mulailah dengan posisi push-up, tetapi dengan lengan bawah yang bertumpu pada lantai. Siku harus tepat di bawah bahu, dan tangan dapat saling berpegangan atau diletakkan terpisah. Jaga tubuh Anda tetap lurus dari kepala hingga kaki. Hindari mengangkat pinggul terlalu tinggi atau membiarkannya turun ke lantai. Kencangkan otot inti dan pertahankan posisi ini selama waktu yang diinginkan. Pastikan kepala tetap sejajar dengan tulang belakang dan pandangan mengarah ke lantai. Untuk mengakhiri plank, turunkan lutut ke lantai dan istirahat sebelum mengulang jika perlu.',
                'calories_burned_description' => 'Kalori yang terbakar selama plank bergantung pada durasi, berat badan, dan tingkat kebugaran. Rata-rata, melakukan plank dapat membakar sekitar 2 hingga 5 kalori per menit.'
            ],
            [
                'exercise_id' => 4,
                'instruction' => 'Berdirilah dengan kaki selebar pinggul dan tangan di samping atau di pinggang. Ambil langkah besar ke depan dengan salah satu kaki, menurunkan tubuh Anda hingga lutut depan membentuk sudut 90 derajat. Lutut belakang harus hampir menyentuh lantai, tetapi tidak menyentuh. Pastikan lutut depan tidak melewati jari-jari kaki dan tubuh tetap tegak. Dorong kembali tubuh ke posisi berdiri dengan menggunakan kaki depan, lalu ulangi dengan kaki lainnya. Ulangi langkah-langkah ini sebanyak yang diperlukan, bergantian antara kaki kanan dan kiri, dengan ritme yang stabil.',
                'calories_burned_description' => 'Kalori yang terbakar saat melakukan lunges bervariasi tergantung pada berat badan, kecepatan, dan intensitas latihan. Sebagai perkiraan umum, setiap lunge dapat membakar sekitar 0,2 hingga 0,4 kalori.'
            ],
            [
                'exercise_id' => 5,
                'instruction' => 'Pegang dumbel atau barbel dengan pegangan tangan supinasi (telapak tangan menghadap ke atas) dan berdirilah dengan kaki selebar bahu. Jaga tubuh tetap tegak dan otot inti dikencangkan. Angkat beban secara perlahan dengan menekuk siku, menjaga siku tetap dekat dengan tubuh. Angkat hingga dumbbell mendekati bahu, kemudian turunkan perlahan ke posisi awal. Ulangi gerakan ini sebanyak yang diperlukan dengan gerakan yang halus dan terkontrol.',
                'calories_burned_description' => 'Kalori yang terbakar selama bicep curl tergantung pada berat badan, berat beban yang diangkat, dan intensitas latihan. Rata-rata, latihan ini membakar antara 5 hingga 8 kalori per menit, tergantung pada faktor-faktor tersebut.'
            ],
            [
                'exercise_id' => 6,
                'instruction' => 'Mulailah dengan posisi plank, dengan tangan sejajar dengan bahu dan kaki lurus ke belakang. Jaga tubuh tetap lurus dan otot inti dikencangkan. Mulailah dengan mengangkat satu lutut ke arah dada, seolah-olah Anda sedang mendaki gunung. Kembalikan kaki ke posisi awal, kemudian ulangi dengan lutut lainnya. Ini dianggap sebagai satu repetisi. Ulangi gerakan ini dengan ritme yang stabil dan seirama, seakan-akan Anda sedang berlari di tempat. Teruskan latihan ini selama durasi yang diinginkan atau jumlah repetisi yang ditentukan.',
                'calories_burned_description' => 'Kalori yang terbakar saat melakukan mountain climber bervariasi berdasarkan berat badan, kecepatan, dan durasi latihan. Sebagai perkiraan umum, latihan ini bisa membakar antara 8 hingga 16 kalori per menit.'
            ]
        ];

        foreach ($data as $item) {
            ExerciseDetail::create($item);
        }
    }
}
