<?php
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->truncate();
 
        User::create(array(
            'email' => 'user1@student.thomasmore.be',
            'password' => Hash::make('test')
        ));
 
        User::create(array(
            'email' => 'user2@student.thomasmore.be',
            'password' => Hash::make('test')
        ));
    }
 
}