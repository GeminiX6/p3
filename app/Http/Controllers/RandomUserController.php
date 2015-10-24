<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;
use Faker\Factory as Faker;

class RandomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRandomUser()
    {
        return view('randomuser.index');
    }




    public function postRandomUser(Request $request)
    {

      //dd($request->all());

      $this->validate($request, [
        'num_users' => 'required|numeric|min:1|max:99',
        ]);

        $data = $request->all();

        $faker = Faker::create();

        $finalUsers = Array();

        for($i = 0; $i < $data['num_users']; $i++){

          $tempUser = Array();

          $tempUser['name'] = $faker->name;
          $tempUser['address'] = $faker->address;

          if(isset($data["birthdate"])){


            $tempUser['birthdate'] = $faker->date;
          }

          if(isset($data["profile"])){

            $tempUser['profile'] = $faker->text;
          }


            $finalUsers[$i] = $tempUser;
        }

        //dd($finalUsers);


        return view('randomuser.postindex')->with(['data' => $data, 'finalUsers' => $finalUsers]);
    }

}
