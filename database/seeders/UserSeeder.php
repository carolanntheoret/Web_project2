<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Istrator',
            'email' => 'admin.istrator@gmail.com',
            'password' => '$2y$10$qsyS3SzpocTG79TUBmrU9OXWIH.vc.2YEypk9quoCeUNiIZkS94Si', // ea)>MB}w^!bLh:)
            'admin' => 1,
        ]);

        // user
        DB::table('users')->insert([
            'first_name' => 'Nota',
            'last_name' => 'Dministrator',
            'email' => 'nota.dministrator@hotmail.ca',
            'password' => '$2y$10$0UQQQdl8r.KXESpmQmBXMOChUMr2BupM0/fIg2j9/.SFLGHkBSLnm', // aW}|.$[JyhH'/;k:)
            'admin' => 0,
        ]);
    }
}
