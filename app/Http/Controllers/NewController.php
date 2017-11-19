<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NewController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function __invoke()
    {
        return "Hello, I am the content of the controller, go back to the <a href=\"..\">main page</a>";
    }
}
