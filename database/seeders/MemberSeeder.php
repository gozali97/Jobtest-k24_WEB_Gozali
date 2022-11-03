<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'nama_member' => 'Gozali',
            'no_ktp' => '613413547',
            'jenis_kelamin' => 'Laki-laki',
            'no_hp' => '08214124124',
            'email' => 'ahmad@gmail',
            'tgl_lahir' => '1997-11-11',
            'password' => '12345',
            'foto' => 'ahmad.jpg',
        ]);
    }
}
