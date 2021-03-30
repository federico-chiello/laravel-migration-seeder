<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;
//Carbon serve nel primo metodo per la data.
// use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Primo metodo: creo un array a mano con i dati che voglio.
        // $students = config('students');

        // foreach($students as $student){
        //     $newStudent = new Student();

        //     $newStudent->nome = $student['nome'];
        //     $newStudent->citta = $student['citta'];
        //     $newStudent->data_nascita = Carbon::createFromFormat('d/m/Y', $student['data_nascita']);

        //     $newStudent->save();
        // }


        //Secondo metodo: utilizzo i dati faker.
        for ($i = 0; $i < 10; $i++){
            $newStudent = new Student();
            $newStudent->nome = $faker->name();
            $newStudent->citta = $faker->city();
            $newStudent->data_nascita = $faker->date();
            $newStudent->save();
        }
    }
}
