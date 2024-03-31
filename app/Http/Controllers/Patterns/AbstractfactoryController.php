<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Creational\Abstractfactory\ClassicDesignFactory;
use App\DesignPatterns\Creational\Abstractfactory\ModernDesignFactory;
use App\Http\Controllers\Controller;

class AbstractfactoryController extends Controller
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
     * Show the abstract factory pattern.
     */
    public function index()
    {
        $classicdarkdesign = ClassicDesignFactory::makeDarkDesign();
        $classiclightdesign = ClassicDesignFactory::makeLightDesign();
        $moderndarkdesign = ModernDesignFactory::makeDarkDesign();
        $modernlightdesign = ModernDesignFactory::makeLightDesign();

        $results[] = $classicdarkdesign->draw();
        $results[] = $classiclightdesign->draw();
        $results[] = $moderndarkdesign->draw();
        $results[] = $moderndarkdesign->draw();

        return view('patterns/abstractfactory', compact("results"));
    }
}
