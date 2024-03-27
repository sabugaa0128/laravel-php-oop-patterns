<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function __invoke() : array
    {
        $persons = [
            [
                'id'=> 1,
                'name'=> "Aleksandrs",
                'age'=> 39,
                'job' => "Programmer"
            ],
            [
                'id'=> 2,
                'name'=> "Petja",
                'age'=> 56,
                'job' => "Driver"
            ],
            [
                'id'=> 3,
                'name'=> "Roza",
                'age'=> 55,
                'job' => "Housekeeper"
            ]
        ];

        return $persons;
    }
}
