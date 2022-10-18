<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            $users = [
            [
               'name'=>'Calon Kader',
               'username'=>'caKader',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Kader',
               'username'=>'kaderbaru',
               'type'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Kader',
               'username'=>'ketum',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Kader',
               'username'=>'sekum',
               'type'=> 3,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Kader',
               'username'=>'bendum',
               'type'=> 4,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Kader',
               'username'=>'kabid',
               'type'=> 5,
               'password'=> bcrypt('123456'),
            ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
