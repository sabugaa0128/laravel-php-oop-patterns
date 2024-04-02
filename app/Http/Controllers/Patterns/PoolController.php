<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Creational\Pool\TaxoparkPool;
use App\Http\Controllers\Controller;

class PoolController extends Controller
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
     * Show the Pool pattern.
     */
    public function index()
    {
        $pool = new TaxoparkPool();
        $taxi = $pool->getTaxi();
        $taxi1 = $pool->getTaxi();
        $taxi2 = $pool->getTaxi();
        $results = $taxi->run();
        $pool->release($taxi1);

        //var_dump($pool->getFreeTaxi());
        //var_dump($pool->getBusyTaxi());
        return view('patterns/pool', compact("results"));
    }
}
