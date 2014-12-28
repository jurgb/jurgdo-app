<?php
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->truncate();
        
        User::create(array(
            'name' => 'Barbier',
            'firstname' => 'Jurgen',
            'email' => 'jurgenbarbier@gmail.com',
            'password' => Hash::make('test123'),
            'address' => 'Heidestraat 88',
            'postalcode' => '2627',
            'city' => 'Schelle',
            'confirmed' => 1
        ));
 
        User::create(array(
            'name' => 'lastname',
            'firstname' => 'firstname',
            'email' => 'firstnamelastname@gmail.com',
            'password' => Hash::make('test123'),
            'address' => 'sesamestreet 101',
            'postalcode' => '2143',
            'city' => 'Oder',
            'confirmed' => 1
        ));
    }
 
}