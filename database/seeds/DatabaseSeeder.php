<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeederTable::class);
        $this->call(UbatSeederTable::class);
        $this->call(PesakitSeederTable::class);
        $this->call(PenyakitSeederTable::class);
        $this->call(MakmalSeederTable::class);
        $this->call(CutiSakitSeederTable::class);
        $this->call(ServisSeederTable::class);
        // $this->call(StockSeederTable::class);
    }
}
