<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Structural\Composite\Body;
use App\DesignPatterns\Structural\Composite\Header;
use App\DesignPatterns\Structural\Composite\Mail;
use App\Http\Controllers\Controller;

class CompositeController extends Controller
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
     * Show the Composite pattern.
     *
     */
    public function index()
    {

        $mail = new Mail();
        $mail->addPart(new Header("Header text"));
        $mail->addPart(new Body("Body text"));

        var_dump($mail->render());

        $results = $mail->render();

        return view('patterns/composite', compact("results"));
    }


}
