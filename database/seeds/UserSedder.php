<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Milos Markovic',
            'email' => 'milos@gmail.com',
            'password' => bcrypt('secret12')
        ]);

        $user2 = User::create([
            'name' => 'Andrija Sagi',
            'email' => 'andrija@gmail.com',
            'password' => bcrypt('secret12')
        ]);
    }
}
