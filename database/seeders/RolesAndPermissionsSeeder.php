<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions for users
        $userPermissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete'
        ];

        // Create permissions for roles
        $rolePermissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete'
        ];

        // Create permissions
        foreach ($userPermissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }

        foreach ($rolePermissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }

        // Create roles and assign permissions
        $superAdminRole = Role::create(['name' => 'super-admin', 'guard_name' => 'web']);
        $adminRole = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $userRole = Role::create(['name' => 'user', 'guard_name' => 'web']);

        // Super Admin gets all permissions
        $superAdminRole->givePermissionTo(Permission::all());

        // Admin gets specific permissions
        $adminRole->givePermissionTo([
            'user-list',
            'user-create',
            'user-edit',
            'role-list',
            'role-create',
            'role-edit'
        ]);

        // User gets basic permissions
        $userRole->givePermissionTo([
            'user-list'
        ]);

        // Create super admin user
        $superAdmin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ]
        );

        // Assign role to super admin
        $superAdmin->assignRole('super-admin');
    }
}
