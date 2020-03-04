<?php

use A17\Twill\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate(
            [
                'email' => config('app.developer.email'),
            ],
            [
                'name' => config('app.developer.email'),
                'role' => 'SUPERADMIN',
                'published' => true,
            ]
        );

        $user->password = bcrypt(config('app.developer.password'));
        $user->save();
    }
}
