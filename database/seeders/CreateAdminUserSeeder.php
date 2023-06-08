<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Fazle',
            'email' => 'admin@demo.com',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::create(['name' => 'Admin']);
        $guestRole =  Role::create(['name' => 'Guest']);

        Category::create(['name' => 'Entertainments']);
        Category::create(['name' => 'Food']);
        Category::create(['name' => 'Exciting']);

        Category::create(['name' => 'For introverts']);
        Category::create(['name' => 'Gastro tour']);
        Category::create(['name' => 'Attractions']);
        Category::create(['name' => 'Fountains']);
        Category::create(['name' => 'Events']);
        Category::create(['name' => 'Theaters and circuses']);
        Category::create(['name' => 'For children']);
        Category::create(['name' => 'Festivals']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);
        $guestRole->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
