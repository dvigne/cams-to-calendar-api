<?php

namespace App\Http\Controllers;

use Illuminate/Http/Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
      $courseName = $request->input('courseName');
      $date = $request->input('date');
      $time = $request->input('time');
      $start = $request->input('start');
      $end = $request->input('end');
      $roomNum = $request->input('roomNum');

      //TODO: Chris -- Write the Google API Code here

      return response(200);
    }
}
