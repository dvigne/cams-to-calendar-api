<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleAPIController extends Controller
{
    public function index(Request $request)
    {
      $courseName = $request->input('courseName');
      $date = $request->input('date');
      $time = $request->input('time');
      $start = $request->input('start');
      $end = $request->input('end');
      $roomNumer = $request->input('roomNumer');

      //TODO: Chris -- Add Google API Code Here
      
      return response(200);
    }
}
