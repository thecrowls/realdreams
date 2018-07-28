<?php
/**
 * Created by PhpStorm.
 * User: PARK
 * Date: 28.07.2018
 * Time: 0:30
 */

namespace app\Seeders;


use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {

        if (env('APP_ENV') != 'production') {
            $password = Hash::make('secret');

            for ($i = 1; $i <= 10; $i++) {
                $users[] = [
                    'email' => 'user' . $i . '@myapp.com',
                    'password' => $password
                ];
            }

            User::insert($users);
        }
    }
}