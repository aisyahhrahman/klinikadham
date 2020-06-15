<?php

use Illuminate\Database\Seeder;

class MakmalSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('makmals')->insert([
            [
                'makmal_name' => 'Urine',
                'harga_makmal' => '30'
            ]
        ]);
    }
}
