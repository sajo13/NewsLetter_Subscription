<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'    => 'Admin',
            'email'   => 'admin@gmail.com',
            'password' =>  Hash::make('secret')
        ]);
        \App\Models\User::create([
            'name'    => 'Sajo',
            'email'   => 'sajo@gmail.com',
            'password' =>  Hash::make('passcode')
        ]);
    }
}
