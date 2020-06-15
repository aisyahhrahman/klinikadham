<?php

use Illuminate\Database\Seeder;

class ServisSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('serviss')->insert([
            [
                'table_id' => '1',
                'penyakit_id' => '1',
                'makmal_id' => '1',
                'cuti_id' => '1'
            ]
        ]);
    }
}
