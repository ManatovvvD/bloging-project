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
       $user = App\User::create([
         'name' => 'Darik',
         'email'=>'180103098@stu.sdu.edu.kz',
         'password'=> bcrypt('password'),
         'admin' => 1,
       ]);
        //
        App\Profile::create([
          'user_id' => $user->id,
          'avatar' => 'uploads/avatars/udostak.jpg',
          'about' => 'My name is Daryn.I am 19. I am from Krg, lear in SDU.',
           'facebook' =>'facebook.com',
           'youtube' => 'youtube.com'
        ]);
    }
}
