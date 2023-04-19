<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);

        $permission1 = Permission::create([
            'name' => 'watch current currencies',
            'slug' => 'watch-current-currencies',
        ]);

        $permission2 = Permission::create([
            'name' => 'watch all currencies',
            'slug' => 'watch-all-currencies',
        ]);
        $permission3 = Permission::create([
            'name' => 'add currencies',
            'slug' => 'add-currencies',
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => $role->id,
            'permission_id' => $permission1->id,
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => $role->id,
            'permission_id' => $permission2->id,
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => $role->id,
            'permission_id' => $permission3->id,
        ]);
        
        
    }
}
