<?php
 
class TodosTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('todos')->truncate();
        
        Todo::create(array(
            'user_id' => 1,
            'title' => "Docent afwezig op 22/10/2014.",
            'description' => "Docent A. Bastiaan zal afwezig zijn op 22/10/2014.",
            'status' => "planned",
            'duration' => 12,
            'durationDone' => 2
        ));

        Todo::create(array(
            'user_id' => 1,
            'title' => "persconferentie",
            'description' => "Op 6/10 zal er een persconferentie van Telenet plaatsvinden in de Creativity Gym.",
            'status' => "doing",
            'duration' => 5,
            'durationDone' => 3.5
        ));

        Todo::create(array(
            'user_id' => 1,
            'title' => "IMD Café",
            'description' => "IMD Café nodigt binnenkort opnieuw enkele sprekers uit om te spreken over SKETCH!",
            'status' => "done",
            'duration' => 5,
            'durationDone' => 5
        ));

        
    }
 
}