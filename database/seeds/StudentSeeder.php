<?php

use Illuminate\Database\Seeder;
use App\Student;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                'nome' => 'Paolo',
                'citta' => 'Roma',
                'data_nascita' => '02/05/98'
            ],
            [
                'nome' => 'Giacomo',
                'citta' => 'Milano',
                'data_nascita' => '13/07/87'
            ],
            [
                'nome' => 'Aldo',
                'citta' => 'Palermo',
                'data_nascita' => '27/11/95'
            ]
        ];

        foreach($students as $student){
            $newStudent = new Student();

            $newStudent->nome = $student['nome'];
            $newStudent->citta = $student['citta'];
            $newStudent->data_nascita = Carbon::createFromFormat('d/m/Y', $student['data_nascita']);

            $newStudent->save();
        }
    }
}
