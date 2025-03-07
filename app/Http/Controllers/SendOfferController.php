<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SendOfferController extends Controller
{
    //
    public function index()

    {

        $companies = Company::all();

        return view('/company/offre2', compact('companies'));


    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            // 'file_path'=>'required',
            'message'=>'required|max:500',
            'post'=>'required',
            'period'=>'required',
            'dateS'=>'required',
            'dateE'=>'required',

        ]);

        $off = new Offer;

        $off->manager_id = Auth::user()->id;
        $off->manager_name = Auth::user()->name.' '.Auth::user()->last_name ;
        $company_name = DB::table('users')
            ->join('companies', 'users.company_id', '=', 'companies.id')
            ->where('users.id', '=', Auth::user()->id)
            ->select('companies.comp_name')
            ->first()
            ->comp_name;
        $phone_num = DB::table('users')
            ->join('companies', 'users.company_id', '=', 'companies.id')
            ->where('users.id', '=', Auth::user()->id)
            ->select('companies.phone_num')
            ->first()
            ->phone_num;
        $address = DB::table('users')
            ->join('companies', 'users.company_id', '=', 'companies.id')
            ->where('users.id', '=', Auth::user()->id)
            ->select('companies.address')
            ->first()
            ->address;
        $logo = DB::table('users')
            ->join('companies', 'users.company_id', '=', 'companies.id')
            ->where('users.id', '=', Auth::user()->id)
            ->select('companies.logo')
            ->first()
            ->logo;
        $off->company_name =    $company_name;
        $off->post = $request->post;
        $off->message = $request->message;
        $off->period = $request->period;
        $off->address =  $address;
        $off->phone_num= $phone_num;
        $off->dateS = $request->dateS;
        $off->dateE = $request->dateE;
        $off->logo=$logo;
        $off->save();

        return redirect('/offerInternship')->with('status', 'offer sent');

    }

}
