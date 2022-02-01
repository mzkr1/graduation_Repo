<?php

namespace App\Http\Controllers;

use App\Models\IS_Graduat_Subject_Info;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class IS_Graduate_Subject_InfoController extends Controller
{
    function is_graduate_subjects_add(Request $request){
        $Graduat_subject  = new IS_Graduat_Subject_Info;

        $Graduat_subject->Subject_Name = $request->name;
        $Graduat_subject->Subject_Synopsis = $request->synopsis;
        $Graduat_subject->Number_Of_Units = $request->units;
        $Graduat_subject->Professor_Number = $request->Professor_number;

        $Graduat_subject->save();
        return redirect()->back();
    }

    function is_graduate_subjects_view (){
        $Graduat_subjects = IS_Graduat_Subject_Info::all();
        return view('admin.IS_Add_GraduateStudies_Subject',['is-graduat-subject-info'=>$Graduat_subjects]);
    }
}

