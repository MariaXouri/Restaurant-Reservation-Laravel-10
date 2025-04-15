<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions

        //every one

        // admin and user(logged in)
        Permission::create(['name' => 'post a reservation']);
        Permission::create(['name' => 'delete a reservation']);
        Permission::create(['name' => 'post email form']);
        Permission::create(['name' => 'delete a menu']);
        Permission::create(['name' => 'delete an email']);
        Permission::create(['name' => 'delete a picture']);
        Permission::create(['name' => 'update our cuisine']);
        Permission::create(['name' => 'update a reservation']);
        Permission::create(['name' => 'update a menu']);
        Permission::create(['name' => 'update an email']);
        Permission::create(['name' => 'update an picture']);







        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('post a reservation');
        $role1->givePermissionTo('post email form');

        $role2 = Role::create(['name' => 'admin']);
        //  $role1->givePermissionTo('post a reservation');
        // $role1->givePermissionTo('post email form');
        // $role2->givePermissionTo('delete a reservation');
        // $role2->givePermissionTo('delete a menu');
        // $role2->givePermissionTo('delete an email');
        // $role2->givePermissionTo('delete a picture');
        // $role2->givePermissionTo('update our cuisine');
        // $role2->givePermissionTo('update a reservation');
        // $role2->givePermissionTo('update a menu');
        // $role2->givePermissionTo('update an email');
        // $role2->givePermissionTo('update an picture');

        $allPermissionNames = Permission::pluck('name')->toArray();

        $role2->givePermissionTo($allPermissionNames);





        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'user@example.com',
            'password' => bcrypt('12345678'),

        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('1234567'),

        ]);
        $user->assignRole($role2);


    }
}
