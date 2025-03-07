<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyManager;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('form', compact('companies'));
    }
    public function managersByCompany($id)
    {
        $managers = User::select('users.id', 'users.name', 'users.last_name')
            ->join('company_managers', 'users.id', '=', 'company_managers.manager_id')
            ->where('company_managers.company_id', $id)
            ->get();

        return $managers;
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'manager_email' => 'required',
            'dateS' => 'required',
            'dateE' => 'required',
            'nameComp' => 'required',
            'College_year' => 'required',
            'post' => 'required',
        ]);

        $stud_id = Auth::id();
        $today = date('Y-m-d');

        // Check if employee exists with the same stud_id, manager_validation = 1, and dateE not equal to today's date
        $existingEmployee = Employee::where('stud_id', $stud_id)
            ->where('manager_validation', 1)
            ->where('dateE', '>=', $today)
            ->first();

        if ($existingEmployee) {
            return redirect('form')->with('error', 'you are in intern now u cant send request'.$today);
        }

        $emp = new Employee;
        $name = Auth::user()->name;
        $last_name = Auth::user()->last_name;
        $email = Auth::user()->email;
        $cardNum = Auth::user()->card_num;
        $socialNum = Auth::user()->social_num;
        $Speciality = Auth::user()->Speciality;
        $education = Auth::user()->education;
        $emp->stud_id = $stud_id;
        $emp->manager_email = $request->manager_email;
        $emp->name = $name;
        $emp->last_name = $last_name;
        $emp->email = $email;
        $emp->card_num = $cardNum;
        $emp->social_num = $socialNum;
        $emp->dateS = $request->dateS;
        $emp->dateE = $request->dateE;
        $emp->nameComp = $request->nameComp;
        $emp->College_year = $request->College_year;
        $emp->Speciality = $Speciality;
        $emp->education = $education;
        $emp->post = $request->post;
        $emp->save();

        return redirect('form')->with('status', 'Form Data Has Been Inserted');
    }

    public function store1 (Request $request)
    {

        $validatedData = $request->validate([




            'Company_name'=>'required',
            // 'file_path'=>'required',
            'message'=>'required',
            'post'=>'required',

        ]);

        $offer = new Offer;
        $company_name = DB::table('company_managers')
            ->join('companies', 'company_managers.company_id', '=', 'companies.id')
            ->where('manager_id', '=', auth()->user()->id)
            ->value('companies.comp_name');
        $offer->manager_id = Auth::user()->id;
        $offer->manager_name = Auth::user()->name.''.Auth::user()->last_name ;
        $offer->company_name = $company_name;
        $offer->post = $request->post;
        $offer->message = $request->message;

        $offer->save();

        return redirect('offerInternship')->with('status', 'Form Data Has Been Inserted');

    }

}
