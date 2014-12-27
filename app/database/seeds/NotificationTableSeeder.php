<?php
 
class NotificationTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('notifications')->truncate();
 
        Notification::create(array(
            'user_id' => 1,
            'notification' => "Docent A. Bastiaan zal afwezig zijn op 22/10/2014."
        ));

        Notification::create(array(
            'user_id' => 1,
            'notification' => "Op 6/10 zal er een persconferentie van Telenet plaatsvinden in de Creativity Gym."
        ));

        Notification::create(array(
            'user_id' => 2,
            'notification' => "IMD Café nodigt binnenkort opnieuw enkele sprekers uit om te spreken over SKETCH!"
        ));

        
    }
 
}