<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Creational\Prototype\Cars;
use App\Http\Controllers\Controller;

class PrototypeController extends Controller
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
        $cars = new Cars();
        $cars2 = clone $cars;
        $cars2->setName("Cars clone");
        $cars2->setModel("Audi");

        $result = $cars->getName().$cars->getModel();
        $result .= "-";
        $result .= $cars2->getName().$cars2->getModel();

        return view('patterns/factory', compact("result"));
    }
}
