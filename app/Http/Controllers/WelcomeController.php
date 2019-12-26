<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Flower;
class WelcomeController extends Controller
{
    public function index(Flower $flower)
    {
        $flower = DB::table('flowers')->take(16)->get();
    
        return view('welcome', ['flower' => $flower]);
    }

    public function detail($id)
    {
        $flower = DB::table('flowers')->where('id','=', $id)->get();
        if(!$flower){
            return view('/detail', ['flower' => $flower])->withErrors('check','Post has been add successfully');
        }
        return view('/detail', ['flower' => $flower]);
    }

    public function product(Flower $flower){
        $flower = DB::table('flowers')->get();
        return view('product', ['flower' => $flower]);
    }

}
