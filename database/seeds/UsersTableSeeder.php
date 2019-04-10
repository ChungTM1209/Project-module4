<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123456');
        $user->phone = '0123456789';
        $user->address = '123@abc';
        $user->role = \App\Http\Controllers\RoleConstant::ADMIN;
        $user->image = null;
        $user->save();

    }
}
