<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'birth' => 'required',
            'dateS' => 'required',
            'dateE' => 'required',
           // 'file_path'=>'required',
            'College_year'=>'required',
            'post'=>'required',
            'Speciality'=>'required',
            'education'=>'required',
        ]);

        $emp = new Employee;
        $stud_id= Auth::id();
        $emp->stud_id=$stud_id;

        $emp->name = $request->name;
        $emp->last_name = $request->last_name;
        $emp->email = $request->email;

        $emp->birth = $request->birth;
        $emp->dateS = $request->dateS;
        $emp->dateE = $request->dateE;
        //$emp->file_path = $request->file_path;
        $emp->College_year = $request->College_year;
        $emp->Speciality = $request->Speciality;
        $emp->education = $request->education;
        $emp->post = $request->post;

        $emp->save();

        return redirect('form')->with('status', 'Form Data Has Been Inserted');

    }

}
