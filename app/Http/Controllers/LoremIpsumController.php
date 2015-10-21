<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;

class LoremIpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLorem()
    {
        //return "Get the Lorem Ipsum parameters";
        return view('loremipsum.index');
    }

    public function postLorem(Request $request)
    {

        $this->validate($request, [
          'number_of_paragraphs' => 'required|numeric|min:1|max:99',
          ]);
        return "Process the Lorem Ipsum parameters";
    }

}
