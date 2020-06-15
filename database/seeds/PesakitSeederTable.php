<?php

use Illuminate\Database\Seeder;

class PesakitSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesakits')->insert([
            [
                'nama_pesakit' => 'Khadijah Az Zahra',
                'nombor_id' => 'P1026',
                'kad_pengenalan' => '960930015216',
                'jantina' => 'perempuan',
                'alamat' => 'Taman Kota Jaya',
                'nombor_fon' => '0128621010',
                'email' => 'dijah@gmail.com',
                'status' => '1'
            ]
        ]);
    }
}
