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
        $s1 = Singleton::getInstance();
        $s1::setName("Singleton 1");


        $s2 = Singleton::getInstance();
        $s2::getName();

        if ($s1 === $s2) {
            $result =  "Singleton works, both variables contain the same instance.";
        } else {
            $result = "Singleton failed, variables contain different instances.";
        }
        return view('patterns/singleton', compact("result"));
    }
}
