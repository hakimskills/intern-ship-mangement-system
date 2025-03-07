<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {
        $student = Auth::user();
        $notifications = Notification::where('student_id', $student->id)->orderBy('created_at', 'desc')->get();
        $notificationCount=$notifications->count();
        return view('home',compact('notifications', 'notificationCount'));
    }
    public function index2()
    {
        $student = Auth::user();
        $notifications = Notification::where('student_id', $student->id)->orderBy('created_at', 'desc')->get();
        $notificationCount=$notifications->count();
        return view('layouts/app3',compact('notifications', 'notificationCount'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $employees = Employee::all();

        return view('adminHome', ['employees' => $employees]);
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Http\RedirectResponse
     */
//    public function managerHome()
//    {
//        return view('managerHome');
//    }
    public function updateUserInfo(Request $request)
    {
        $userId = Auth::user()->id;


        $user = User::find($userId);

        // Update the user's information based on the submitted form data
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->card_num = $request->input('card_num');
        $user->social_num = $request->input('social_num');
        $user->Speciality = $request->input('Speciality');
        $user->education = $request->input('education');
        $newPassword = $request->input('password');

        if ($newPassword) {
            $oldPassword = $request->input('old_password');

            // Verify if the old password matches the stored hashed password
            if (Hash::check($oldPassword, $user->password)) {
                $user->password = Hash::make($newPassword);
            } else {
                return redirect()->back()->withErrors(['old_password' => 'Old password is incorrect.']);
            }
        }



// Update the first_login flag
        $user->first_login = false;


        $user->save();


        return redirect()->route('home');
    }


    public function updateManagerInfo(Request $request)
    {
        $userId = Auth::user()->id;
        $user = User::find($userId);

        // Update the user's information based on the submitted form data
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');

        // Check if a new password is provided
        $newPassword = $request->input('password');

        if ($newPassword) {
            $oldPassword = $request->input('old_password');

            // Verify if the old password matches the stored hashed password
            if (Hash::check($oldPassword, $user->password)) {
                $user->password = Hash::make($newPassword);
            } else {
                return redirect()->back()->withErrors(['old_password' => 'Old password is incorrect.']);
            }
        }

        $user->save();

        return redirect()->route('manager.home');
    }


    public function showUpdateInfoForm()
    {
        return view('editProfile');
    }
    public function UpdateInfoManager()
    {
        return view('editMan');
    }
    public function managerHome()
    {
        $userId = auth()->user()->company_id;
        $companies = Company::where('id', $userId)->get();

        return view('managerHome', compact('companies'));
    }
    public function uploadLogo(Request $request)
    {
        $user = Auth::user();

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $logo = $request->file('logo');
            $fileName = time() . $logo->getClientOriginalName();
            $path = $logo->storeAs('logos', $fileName, 'public');

            // Retrieve the user's company record
            $company = $user->company;

            // Update the logo path
            $company->logo = $path;
            $company->save();

            return redirect()->back()->with('success', 'Logo uploaded successfully.');
        }

        return redirect()->back()->with('error', 'Failed to upload logo.');
    }




}
