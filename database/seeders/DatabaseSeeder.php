<?php

namespace Database\Seeders;
use App\Models\Train;
use Faker\Generator as faker;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(faker $faker): void
    {
        for($i = 0;$i < 10; $i++){
            $train = new Train();
            $train->azienda = $faker->randomElement(['Italo','Freccia Rossa','Intercity','Freccia Argento']);
            $train->stazione_di_partenza = $faker->randomElement(['Roma Termini','Milano Centrale','Napoli Centrale','Torino Centrale']);
            $train->stazione_di_arrivo = $faker->randomElement(['Roma Termini','Milano Centrale','Napoli Centrale','Torino Centrale']);
            $train->orario_di_partenza = $faker->time(); // Orario di partenza casuale
            $train->orario_di_arrivo = $faker->time(); // Orario di arrivo casuale
            $train->codice_treno = 'TRN' . $faker->unique()->randomNumber(5); // Codice treno univoco
            $train->numero_carrozze = $faker->numberBetween(5, 15); // Numero di carrozze
            $train->in_orario = $faker->boolean(); // In orario o no
            $train->cancellato = $faker->boolean(10); // 10% di probabilità che sia cancellato
            $train->created_at = now();
            $train->updated_at = now();
    
    
            $train->save();



        }




    }
}

