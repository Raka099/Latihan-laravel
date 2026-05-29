<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Mahasiswa;

use Illuminate\support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('mahasiswas')->insert([
        //     [
        //         'nama' => 'Eko Utomo',
        //         'nim' => '220101001',
        //         'jurusan' => 'Teknik Informatika',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama' => 'Siti Aminah',
        //         'nim' => '220101002',
        //         'jurusan' => 'SistemInformasi',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
        Mahasiswa::factory(50)->create();
    }
}
