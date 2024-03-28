<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Creational\Factory\WorkerFactory;
use App\Http\Controllers\Controller;

class FactoryController extends Controller
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
     * Show the factory pattern.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $worker = WorkerFactory::make();
        $worker->setName("Web developer");
        $result = $worker->getName();

        return view('patterns/factory', compact("result"));
    }
}
