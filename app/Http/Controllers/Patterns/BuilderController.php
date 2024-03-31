<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Creational\Builder\Operator;
use App\DesignPatterns\Creational\Builder\TextBuilder;
use App\Http\Controllers\Controller;

class BuilderController extends Controller
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
     * Show the builder pattern.
     */
    public function index()
    {
        $operator = new Operator();
        $builder = new TextBuilder();
        $builder->make();
        $message = $operator->make($builder);

        $results[] = $message->getText();


        return view('patterns/builder', compact("results"));
    }
}
