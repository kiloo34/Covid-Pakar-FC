<?php

namespace Database\Seeders;

use App\Models\Symptom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Symptom::truncate();
        Symptom::insert([
            [
                'name' => 'Batuk kering'
            ],
            [
                'name' => 'Merasakan Flu'
            ],
            [
                'name' => 'Flu cuma berair'
            ],
            [
                'name' => 'Sering merasa sakit pada tenggorokkan'
            ],
            [
                'name' => 'Sedang merasa demam'
            ],
            [
                'name' => 'Suhu badan tidak menentu'
            ],
            [
                'name' => 'Tidak mengalami gejala dalam sebuah pernafasan'
            ],
            [
                'name' => 'Merasakan sebuah denyut jantung yang normal'
            ],
            [
                'name' => 'Indra penciuman yang tidak berfungsi'
            ],

            // Sedang
            [
                'name' => 'Saya pernah melakukan perjalanan keluar negeri'
            ],
            [
                'name' => 'Batuk berdahak'
            ],
            [
                'name' => 'Flu berlendir'
            ],
            [
                'name' => 'tenggorokan terasa nyeri'
            ],
            [
                'name' => 'Panas badan tidak mau turun'
            ],
            [
                'name' => 'Suhu badan diatas 39 derajat'
            ],
            [
                'name' => 'Merasa kesulitan bernapas atau sesak napas'
            ],
            [
                'name' => 'Merasakan nyeri pada badan'
            ],
            [
                'name' => 'Susah menarik nafas panjang'
            ],
            [
                'name' => 'terdapat ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki'
            ],
            [
                'name' => 'Sakit kepala'
            ],

            // Berat
            [
                'name' => 'Pernah melakukan perjalanan luar kota kontak dengan pasien terinfeksi covid 19'
            ],
            [
                'name' => 'Merasakan batuk'
            ],
            [
                'name' => 'Mengalami sakit tenggorokan'
            ],
            [
                'name' => 'Panas tinggi sekali'
            ],
            [
                'name' => 'Merasakan dada sesak'
            ],
            [
                'name' => 'Kepala terasa sakit'
            ],
        ]);
        Schema::enableForeignKeyConstraints(); 
    }
}
