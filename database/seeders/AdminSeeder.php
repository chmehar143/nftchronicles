<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Admin::create([
            'name'        => 'User',
            'email'       => 'admin@dev.com',
            'password'    => Hash::make('123456789'),
             'status' => 1,
             'role'    => 'super admin',
        ]);
    }
}
