<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class SubjectController extends Controller
{
    function add(Request $request){
        $subject  = new Subject;

        $subject->name = $request->name;
        $subject->subject_id = $request->id;
        $subject->type = $request->type;
        $subject->save();

        return redirect()->back();
    }
}

