<?php

namespace App\Http\Controllers;

use App\Models\IS_Professor_Info;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class IS_Professor_InfoController extends Controller
{
    function is_professor_add(Request $request){
        $professor  = new IS_Professor_Info;

        $professor->Professor_Name = $request->name;
        $professor->Professor_degree = $request->degree;
        $professor->Certificate = $request->certificate;
        $professor->Gender = $request->gender;
        $professor->Professor_picture = $request->picture;

        $professor->save();
        return redirect()->back();
    }

    function is_professor_view (){
        $professors = IS_Professor_Info::all();
        return view('admin.IS_Add_Professor',['IS-Professor-Info'=>$professors]);
    }
}
