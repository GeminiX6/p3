<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;
use Badcow\LoremIpsum;

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

        $data = $request['number_of_paragraphs'];

        $generator = new LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($data);

        return view('loremipsum.postindex')->with(['paragraphs' => $paragraphs]);
    }

}
