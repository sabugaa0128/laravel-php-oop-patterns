<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Structural\Dependencyinjection\ControllerConfiguration;
use App\DesignPatterns\Structural\Dependencyinjection\Controller as DIController;

use App\Http\Controllers\Controller;

class DependencyinjectionController extends Controller
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
     * Show the Dependency injection pattern.
     *
     */
    public function index()
    {
        $configuration = new ControllerConfiguration("PostController", "index");
        $controller = new DIController($configuration);
        //var_dump($controller->getConfiguration());
        $result = $controller->getConfiguration();
        return view('patterns/dependencyinjection', compact("result"));
    }
}
