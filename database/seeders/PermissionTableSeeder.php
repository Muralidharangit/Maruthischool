<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\PermissionGroup;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = [
            // Dashboard
            [
                'name' => 'user-management',

            ],
            [
                'name' => 'event-management',

            ],
            [
                'name' => 'gallery-management',

            ],
            [
                'name' => 'contact-management',

            ],
        ];

        echo '---------------------------------------' . "\n";
        echo '--------Permission Seeding-------' . "\n";

        foreach ($permission as $key => $value) {
            $permission = new Permission;
            $permission->name = $value['name'];
            $permission->save();
            echo "-------Permission Name=> $permission->name--------------" . "\n";
        }
        echo "-------Permission Seeding Completed--------------" . "\n";
    }
}
