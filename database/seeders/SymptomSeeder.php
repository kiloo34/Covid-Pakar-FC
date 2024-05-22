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
        $datas = [
            [
                'name' => 'Batuk'
            ],
            [
                'name' => 'flu'
            ],
            [
                'name' => 'Demam'
            ],
            [
                'name' => 'Sakit tenggorokan'
            ],
            [
                'name' => 'sesak nafas'
            ],
            [
                'name' => 'denyut jantung'
            ],
            [
                'name' => 'indra penciuman'
            ],
            [
                'name' => 'indra pengecap'
            ],
            [
                'name' => 'kondisi'
            ],
            [
                'name' => 'diare'
            ],
            [
                'name' => 'nyeri tulang otot'
            ],
            [
                'name' => 'fatingue'
            ],
            [
                'name' => 'melakukan perjalanan'
            ],
            [
                'name' => 'sakit kepala'
            ],
            [
                'name' => 'nyeri badan'
            ],
            [
                'name' => 'susah bernafas panjang'
            ],
            [
                'name' => 'ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki'
            ],
            [
                'name' => 'saturasi oksigen'
            ],
            [
                'name' => 'komorbid (penyakit bawaan)'
            ],
            [
                'name' => 'selera makan'
            ],
            [
                'name' => 'pucat'
            ],
            [
                'name' => 'nyeri dada'
            ],
        ];
        collect($datas)->each(function ($data) { Symptom::create($data); });
        Schema::enableForeignKeyConstraints(); 
    }
}
