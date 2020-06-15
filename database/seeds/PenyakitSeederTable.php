<?php

use Illuminate\Database\Seeder;

class PenyakitSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_penyakits')->insert([
            [
                'jenis_penyakit' => 'demam',
                'catatan' => 'perlu jaga kesihatan'
            ]
        ]);
    }
}
