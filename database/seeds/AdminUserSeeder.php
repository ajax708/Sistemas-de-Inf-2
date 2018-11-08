<?php

use Illuminate\Database\Seeder;

/**
 * Class AdminUserSeeder
 */
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            factory(App\User::class)->create([
                    "name" => env('ADMIN_USER', "Admin"),
                    "email" => env('ADMIN_EMAIL', "admin@example.com"),
                    "password" => bcrypt(env('ADMIN_PWD', '123456'))])->each(function($user){
                            $user->persona()->save(factory(App\Persona::class)->make());
                    });

        } catch (\Illuminate\Database\QueryException $exception) {
        }

        factory(App\User::class,12)->create()
            ->each(function($user){
                $user->persona()->save(factory(App\Persona::class)->make());
        });
    }
}
