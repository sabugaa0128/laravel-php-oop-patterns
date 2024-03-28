<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Creational\Factorymethod\DesignerFactory;
use App\DesignPatterns\Creational\Factorymethod\DeveloperFactory;
use App\Http\Controllers\Controller;

class FactorymethodController extends Controller
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
     * Show the factory method pattern.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $developer = DeveloperFactory::make();
        $designer = DesignerFactory::make();

        $results = Array();

        $results[] = $developer->work();
        $results[] = $designer->work();

        return view('patterns/factorymethod', compact("results"));
    }
}
