<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Reseta cache de roles e permissions da biblioteca Spatie
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // \App\Models\User::factory(10)->create();

        $admin = Permission::create(['name' => 'Admin']);
        User::create([
            'name' => 'Alexsandro Pereira Azevedo',
            'email' => 'cafe@cafe.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ])->givePermissionTo($admin);
    }
}
