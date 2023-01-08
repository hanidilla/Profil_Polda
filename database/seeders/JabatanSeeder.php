<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = [
            ['jabatan' => 'KAPOLDA',],
            ['jabatan' => 'WAKAPOLDA',],
            ['jabatan' => 'IRWASDA',],
            ['jabatan' => 'KABIDPROPAM',],
            ['jabatan' => 'KABIDHUMAS',],
            ['jabatan' => 'KABIDKUM',],
            ['jabatan' => 'KABID TIK',],
            ['jabatan' => 'KARO OPS',],
            ['jabatan' => 'KARO RENA',],
            ['jabatan' => 'KARO SDM',],
            ['jabatan' => 'KARO LOG',],
            ['jabatan' => 'SPRIPIM',],
            ['jabatan' => 'SETUM',],
            ['jabatan' => 'KAYANMA',],
            ['jabatan' => 'DIRINTELKAM',],
            ['jabatan' => 'DIRRESKRIMUM',],
            ['jabatan' => 'DIRRESKRIMSUS',],
            ['jabatan' => 'DIRRESNARKOBA',],
            ['jabatan' => 'DIRBINMAS',],
            ['jabatan' => 'DIRSAMAPTA',],
            ['jabatan' => 'DIRLANTAS',],
            ['jabatan' => 'DIRPAMOBVIT',],
            ['jabatan' => 'DIRPOLAIRUD',],
            ['jabatan' => 'KASAT BRIMOB',],
            ['jabatan' => 'SPKT',],
            ['jabatan' => 'DIRTAHTI',],
            ['jabatan' => 'KA SPN',],
            ['jabatan' => 'KABID KEU',],
            ['jabatan' => 'KABID DOKKES',],
            ['jabatan' => 'KABID LABFOR',],
        ];

        DB::table('table_jabatan')->insert($jabatan);
    }
}
