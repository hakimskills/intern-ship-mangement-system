<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return view('offer', ['offers' => $offers]);

    }
    public function store(Request $request, $offer)
    {
        $validatedData = $request->validate([
            // Add your validation rules here
        ]);

        $offer = Offer::find($offer);

        // Check if employee exists with the given information
        $existingEmployee = Employee::where('stud_id', Auth::id())
            ->where('name', Auth::user()->name)
            ->where('last_name', Auth::user()->last_name)
            ->where('email', Auth::user()->email)
            ->where('card_num', Auth::user()->card_num)
            ->where('social_num', Auth::user()->social_num)
            ->where('Speciality', Auth::user()->Speciality)
            ->where('education', Auth::user()->education)
            ->where('nameComp', $offer->company_name)
            ->where('post', $offer->post)
            ->where('dateS', $offer->dateS)
            ->where('dateE', $offer->dateE)
            ->first();

        if ($existingEmployee) {
            return redirect('offer')->with('error', 'offer  with the same information already exists');
        }

        // Check if dateS is earlier than dateE


        $emp = new Employee;
        $stud_id = Auth::id();
        $name = Auth::user()->name;
        $last_name = Auth::user()->last_name;
        $email = Auth::user()->email;
        $cardNum = Auth::user()->card_num;
        $socialNum = Auth::user()->social_num;
        $Speciality = Auth::user()->Speciality;
        $education = Auth::user()->education;
        $manager = User::where('id', $offer->manager_id)->where('type', 2)
            ->select('email')->first();

        $manager_email = $manager->email;
        $emp->stud_id = $stud_id;
        $emp->manager_email = $manager_email;
        $emp->name = $name;
        $emp->last_name = $last_name;
        $emp->email = $email;
        $emp->card_num = $cardNum;
        $emp->social_num = $socialNum;
        $emp->dateS = $offer->dateS;
        $emp->dateE = $offer->dateE;
        $emp->nameComp = $offer->company_name;
        //$emp->file_path = $request->file_path;
        $emp->College_year = '/';
        $emp->Speciality = $Speciality;
        $emp->education = $education;
        $emp->post = $offer->post;

        $emp->save();

        return redirect('offer')->with('status', 'Request sent');
    }

    public function show(Offer $offer)
    {
        return view('more', compact('offer'));
    }

}
