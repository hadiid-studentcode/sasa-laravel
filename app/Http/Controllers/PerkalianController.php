<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkalianController extends Controller
{
    public function index(){
    	return view('Perkalian.index');
    }

    public function hasil(Request $request){
    	//dd($request ->all());
    	//return view('hasil.index');

    	$angka1 = $request->input('angka1');
    	$angka2 = $request->input('angka2');

    	$hasil = $angka1 * $angka2;

    	return view('Perkalian.hasil')->with('hasilperkalian', $hasil);
    }
}

