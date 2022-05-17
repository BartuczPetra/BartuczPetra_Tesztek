<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teszt;

class TesztController extends Controller
{
    public function index(){
        $tesztek = response()->json(Teszt::all());
        return $tesztek;
    }

    public function store(Request $request){
        $tesztek = new Teszt();
        $tesztek->kategoriaId=$request->kategoria;
        $tesztek->kerdes=$request->kerdes;
        $tesztek->v1=$request->v1;
        $tesztek->v2=$request->v2;
        $tesztek->v3=$request->v3;
        $tesztek->v4=$request->v4;
        $tesztek->helyes=$request->helyes;
        $tesztek->save();

        return Teszt::find($tesztek->id);
    }

    public function delete($id){
        $tesztek=Teszt::where('id',$id)->delete();
        return $tesztek;
    }
}
