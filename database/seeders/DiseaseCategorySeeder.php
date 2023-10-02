<?php

namespace Database\Seeders;

use App\Models\DiseaseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DiseaseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DiseaseCategory::truncate();
        $datas = [
            [
                'code'  => 'T01',
                'name'  => 'terinfeksi ringan',
                'disease_id' => 1
            ],
            [
                'code'  => 'T02',
                'name'  => 'terinfeksi sedang',
                'disease_id' => 1
            ],
            [
                'code'  => 'T03',
                'name'  => 'terinfeksi berat',
                'disease_id' => 1
            ],
            [
                'code'  => 'T04',
                'name'  => 'varian delta',
                'disease_id' => 1
            ],
            [
                'code'  => 'T05',
                'name'  => 'terinfeksi alpha',
                'disease_id' => 1
            ],
            [
                'code'  => 'T06',
                'name'  => 'terinfeksi omicron',
                'disease_id' => 1
            ],
            [
                'code'  => 'T07',
                'name'  => 'terinfeksi delta',
                'disease_id' => 1
            ]
        ];
        collect($datas)->each(function ($data) { DiseaseCategory::create($data); });
        Schema::enableForeignKeyConstraints();
    }
}
