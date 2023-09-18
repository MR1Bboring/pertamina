<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class studentsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        student::insert([
              'tanggal'=>'30-11-2004',
              'jam_masuk'=>'12:00:30',
              'jam_keluar'=>'15:00:40',
              'Nama'=>'adhwa',
              'instansi'=> 'smkn1garut',
              'No_hp'=> '082234562239',
              'dikunjungi'=>'ict',
              'No_visitor'=>'004'
              
        ]);
    }
}
