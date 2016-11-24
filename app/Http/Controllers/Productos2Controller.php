<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class Productos2Controller extends Controller
{
    //
public function show_prods()
{

	$results =DB::table('productos')->get();
	return view('productos2', array('res' => $results));
}

}
