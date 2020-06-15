<?php

use Illuminate\Database\Seeder;

class StockSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            [
                'kuantiti' => '20',
                'price' => '200',
                'batch_no' => '95421',
                'invoice' => '9878600',
                'tarikh' => '2020-10-02',
                'mal_no' => 'MAL2513',
                'expiry_date' => '2020-01-02',
                'ubat_id' => '1'
            ]
        ]);
    }
}
