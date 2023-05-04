<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Misc
        $miscPermission = Permission::create(['name' => 'N/A']);

        // USER MODEL
        $userPermission1 = Permission::create(['name' => 'create: user']);
        $userPermission2 = Permission::create(['name' => 'read: user']);
        $userPermission3 = Permission::create(['name' => 'update: user']);
        $userPermission4 = Permission::create(['name' => 'delete: user']);

        // ROLE MODEL
        $rolePermission1 = Permission::create(['name' => 'create: role']);
        $rolePermission2 = Permission::create(['name' => 'read: role']);
        $rolePermission3 = Permission::create(['name' => 'update: role']);
        $rolePermission4 = Permission::create(['name' => 'delete: role']);

        // PERMISSION MODEL
        $permission1 = Permission::create(['name' => 'create: permission']);
        $permission2 = Permission::create(['name' => 'read: permission']);
        $permission3 = Permission::create(['name' => 'update: permission']);
        $permission4 = Permission::create(['name' => 'delete: permission']);

        // SERVICE MODEL
        $servicePermission1 = Permission::create(['name' => 'create: service']);
        $servicePermission2 = Permission::create(['name' => 'read: service']);
        $servicePermission3 = Permission::create(['name' => 'update: service']);
        $servicePermission4 = Permission::create(['name' => 'delete: service']);


        // BOOKING MODEL
        $bookingPermission1 = Permission::create(['name' => 'create: booking']);
        $bookingPermission2 = Permission::create(['name' => 'read: booking']);
        $bookingPermission3 = Permission::create(['name' => 'update: booking']);
        $bookingPermission4 = Permission::create(['name' => 'delete: booking']);



        // ADMINS
        $adminPermission1 = Permission::create(['name' => 'read: admin']);
        $adminPermission2 = Permission::create(['name' => 'update: admin']);

        // CREATE ROLES
        $userRole = Role::create(['name' => 'user'])->syncPermissions([
            $miscPermission,
        ]);

        $adminRole = Role::create(['name' => 'admin'])->syncPermissions([
            $userPermission1,
            $userPermission2,
            $userPermission3,
            $userPermission4,
            $rolePermission1,
            $rolePermission2, 
            $rolePermission3,
            $rolePermission4,
            $permission1,
            $permission2,
            $permission3,
            $permission4,
            $servicePermission1,
            $servicePermission2,
            $servicePermission3,
            $servicePermission4,
            $bookingPermission1,
            $bookingPermission2,
            $bookingPermission3,
            $bookingPermission4,
            $adminPermission1,
            $adminPermission2,
            $userPermission1,
        ]);
        $staffRole = Role::create(['name' => 'staff'])->syncPermissions([
            $userPermission2,
            $rolePermission2,
            $servicePermission2,
            $bookingPermission2,
            $bookingPermission3,
            $bookingPermission4,
            $permission2,
            $adminPermission1,
        ]);

        // $developerRole = Role::create(['name' => 'developer'])->syncPermissions([
        //     $adminPermission1,
        // ]);

        // CREATE ADMINS & USERS
        // User::create([
        //     'name' => 'super admin',
        //     'is_admin' => 1,
        //     'email' => 'super@admin.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ])->assignRole($superAdminRole);

        User::create([
            'name' => 'admin',
            'is_admin' => 1,
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole($adminRole);

        User::create([
            'name' => 'staff',
            'is_admin' => 1,
            'email' => 'staff@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole($staffRole);

        // User::create([
        //     'name' => 'developer',
        //     'is_admin' => 1,
        //     'email' => 'developer@admin.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ])->assignRole($developerRole);

        // for ($i=1; $i < 20; $i++) {
        //     User::create([
        //         'name'              => 'Test '.$i,
        //         'is_admin'          => 0,
        //         'email'             => 'test'.$i.'@test.com',
        //         'address'           => 'address '.$i,
        //         'contact_num'       => $i * 100,
        //         'email_verified_at' => now(),
        //         'password'          => Hash::make('password'), // password
        //         'remember_token'    => Str::random(10),
        //     ])->assignRole($userRole);
        // }
    }
}
