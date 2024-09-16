<?php

use App\User;
use Illuminate\Database\Seeder;
use App\Models\Role;

class john_aries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::create([
        //     'name' => 'super admin',
        //     'display_name' => 'Super admin',
        //     'description' => 'Sukuna '
        // ]);
    
        // Role::create([
        //     'name' => 'admin',
        //     'display_name' => 'admin',
        //     'description' => 'gojo'
        // ]);
    
        // Role::create([
        //     'name' => 'user',
        //     'display_name' => 'user',
        //     'description' => 'yuji'
        // ]);

        $superAdmin = Role::where('name', 'super admin')->first();
        $admin = Role::where('name', 'admin')->first();
        $user = Role::where('name', 'user')->first();

        $user1 = User::find(1); // Assuming you want to assign the role to the user with ID 1
        $user1->attachRole($superAdmin);

        $user2 = User::find(2); // Another user with ID 2
        $user2->attachRole($admin);

        $user3 = User::find(3); // Another user with ID 2
        $user3->attachRole($user);
    }
}
