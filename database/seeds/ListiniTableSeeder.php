<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Listino;

class ListiniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <10; $i++){
            $pizza = new Listino();
            $pizza->nome_pizza = $faker->name();
            $pizza->price =  $faker->unique()->randomDigit();
            $pizza->is_celiaca = false;
            $pizza->is_senza_lattosio = false;
            $pizza->save();
        }
    }
}
