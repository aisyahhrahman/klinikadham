<?php

use Illuminate\Database\Seeder;

class CutiSakitSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cuti_sakits')->insert([
            [
                'total_cuti' => '2',
                'date_from' => '2020-01-10',
                'date_until' => '2020-10-03'
            ]
        ]);
    }
}
