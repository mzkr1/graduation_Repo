<?php

namespace App\Http\Controllers;

use App\Models\IS_Subject_Info;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class IS_Subject_InfoController extends Controller
{
    function is_subjects_add(Request $request){
        $subject  = new IS_Subject_Info;

        $subject->Subject_Code = $request->code;
        $subject->Subject_Name = $request->name;
        $subject->Subject_Synopsis = $request->synopsis;
        $subject->Number_Of_Units = $request->units;
        $subject->Subject_Type = $request->type;
        $subject->Professor_Number = $request->Professor_number;

        $subject->save();
        return redirect()->back();
    }

    function is_subjects_view (){
        $subjects = IS_Subject_Info::all();
        return view('admin.IS_Add_Subject',['is-subject-info'=>$subjects]);
    }
}
