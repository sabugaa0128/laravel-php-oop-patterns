<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Structural\Registry\Registry;
use App\DesignPatterns\Structural\Registry\Service;
use App\Http\Controllers\Controller;

class RegistryController extends Controller
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
     * Show the Prototype pattern.
     *
     */
    public function index()
    {


        $service = new Service();

        Registry::setService("service1", $service);
        Registry::getKey("service1");

        $results =  Registry::getKey("service1");

        return view('patterns/registry', compact("results"));
    }


}
