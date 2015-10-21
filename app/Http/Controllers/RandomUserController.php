<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;

class RandomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRandomUser()
    {
        return "Get parameters for Random User";
    }

    public function postRandomUser()
    {
        return "Post parameters for Random User";
    }

}
