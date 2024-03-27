<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Creational\Singleton\Singleton;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingletonController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $objectSigleton = Singleton::getInstance();
        $objectSigleton::setName("Singleton");

        $objectSigleton2 = Singleton::getInstance();
        $objectSigleton2::getName();
        $objectSigleton2::setName("Singleton2");

      //  dd($objectSigleton === $objectSigleton2);
        dd($objectSigleton::getName());
        return view('patterns/singleton');
    }
}
