<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Creational\Staticfactory\TransportFactory;
use App\DesignPatterns\Creational\Staticfactory\Cars;
use App\DesignPatterns\Creational\Staticfactory\Trucks;
use App\Http\Controllers\Controller;

class StaticfactoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the Static factory pattern.
     */
    public function index()
    {
        $car = TransportFactory::build('cars');
        $truck = TransportFactory::build('trucks');
        $results[] = $car->move();
        $results[] = $truck->move();

        return view('patterns/staticfactory', compact("results"));
    }
}
