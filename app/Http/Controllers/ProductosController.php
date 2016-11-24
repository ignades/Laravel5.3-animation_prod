<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductosController extends Controller
{
    //mostrar productos

   public function all_products()
   {
        $results =DB::table('productos')->get();
        return view('productos', array('res' => $results));
   }

}
