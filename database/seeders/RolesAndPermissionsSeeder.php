<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Criar permissões
        $permissions = ['create users', 'edit users', 'delete users', 'view dashboard'];
        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Criar roles e atribuir permissões
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->givePermissionTo(Permission::all());

        $manager = Role::firstOrCreate(['name' => 'manager']);
        $manager->givePermissionTo(['view dashboard', 'edit users']);

        // Criar usuários base
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin', 'password' => bcrypt('123456')]
        );
        $adminUser->assignRole($admin);

        $managerUser = User::firstOrCreate(
            ['email' => 'manager@example.com'],
            ['name' => 'Manager', 'password' => bcrypt('123456')]
        );
        $managerUser->assignRole($manager);
    }
}