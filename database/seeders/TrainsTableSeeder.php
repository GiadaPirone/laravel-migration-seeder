<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i < 10; $i++) { 
        $newTrain = new Train();
        $newTrain->azienda= $faker->word();
        $newTrain->stazione_partenza=$faker->sentence(3);
        $newTrain->stazione_arrivo=$faker->sentence(3);
        $newTrain->orario_partenza=$faker->dateTime();
        $newTrain->orario_arrivo=$faker->dateTime();
        $newTrain->codice_treno=$faker->numberBetween(4,15);
        $newTrain->in_orario=$faker->numberBetween(0, 1);
        $newTrain->cancellato=$faker->numberBetween(0,1);
        $newTrain->data_partenza=$faker->date();
        $newTrain->save();


       }
    }
}
