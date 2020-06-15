<?php

use Illuminate\Database\Seeder;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Zakiah',
                'email' => 'zakiah@gmail.com',
                'password' => bcrypt('zakiah73'),
                'status_id' => 1,
                'role' => 1
            ],
            [
                'name' => 'Tini',
                'email' => 'tini@gmail.com',
                'password' => bcrypt('aisyah96'),
                'status_id' => 1,
                'role' => 2
            ],
            [
                'name' => 'Scha',
                'email' => 'aisyah@gmail.com',
                'password' => bcrypt('aisyah96'),
                'status_id' => 1,
                'role' => 3
            ],
            [
                'name' => 'Syafie',
                'email' => 'syafie@gmail.com',
                'password' => bcrypt('aisyah96'),
                'status_id' => 1,
                'role' => 4
            ]
        ]);
    }
}
