<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'firstname' => 'Admin',
            'lastname' => 'User',
            'email'=> 'admin@admin.com',
            'password' => Hash::make('password'),
            'phonenumber' => '79062571414',
            'mobile'=> '79062571415'
        ]);

        $author = User::create([
            'firstname' => 'Author',
            'lastname' => 'User',
            'email'=> 'author@author.com',
            'password' => Hash::make('password'),
            'phonenumber' => '79062571515',
            'mobile'=> '79062571516'
        ]);

        $user = User::create([
            'firstname' => 'Generic',
            'lastname' => 'User',
            'email'=> 'user@user.com',
            'password' => Hash::make('password'),
            'phonenumber' => '79062571616',
            'mobile'=> '79062571617'
        ]);
        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

    }
}
