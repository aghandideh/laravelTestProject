<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'Admin',
            ],
            [
                'Category',
            ],
            [
                'User',
            ],
            [
                'Setting',
            ],
            [
                'Products',
            ],
        ];
        foreach ($permissions as $permission)
        {
            Permission::create([
                'name' => $permission[0],
                'english_name' => $permission[0],
            ]);
        }
    }
}
