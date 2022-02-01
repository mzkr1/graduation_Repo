<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    function index(){
        return view('admin.index');
    }
    
    function add(){
        $subjects = Subject::all();
        return view('admin.add-subject',['subjects'=>$subjects]);
    }
}
