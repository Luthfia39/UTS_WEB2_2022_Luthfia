<?php

namespace Database\Seeders;

use App\Models\Idolaku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UTSLuthfiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Idolaku::create([
            'nama' => 'Idola 1',
            'alasan' => 'Ya suka aja gitu. '
        ]);
        Idolaku::create([
            'nama' => 'Idola 2',
            'alasan' => 'Ya suka aja gitu. '
        ]);
        Idolaku::create([
            'nama' => 'Idola 3',
            'alasan' => 'Ya suka aja gitu. '
        ]);
    }
}
