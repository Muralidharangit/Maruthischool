<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        echo '---------------------------------------' . "\n";
        echo '--------User Seeding-------' . "\n";

        $users = [
            [
                'name' => 'Developer',
                'email' => 'school@gmail.com',
                'password' => Hash::make('password'),
                'type' => 'admin'
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('Admin@123'),
                'type' => 'admin'
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }

        $user = User::all();
        $user[0]->assignRole('Super Admin');
        $user[1]->assignRole('Super Admin');
    }
}
