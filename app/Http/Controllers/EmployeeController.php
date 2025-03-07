<?php

namespace App\Http\Controllers;

use App\Mail\EmployeeAccepted;
use App\Models\Absence;
use App\Models\Company;
use App\Models\CompanyManager;
use App\Models\Notification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('list', ['employees' => $employees]);
    }

    public function listInManager()
    {
        $employees = Employee::where('accepted', Employee::ACCEPTED)->get();
        return view('company/list2', ['employees' => $employees]);
    }
    public function index2()
    {
        $employees = Employee::where('stud_id',Auth::id())->get();
        return view('recentReq', ['employees' => $employees]);
    }
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('show' , compact('employee'));
    }
    public function showInManager($idAccepted)
    {
        $employee = Employee::find($idAccepted);
        return view('company/show' , compact('employee'));
    }



    public function acceptEmployee(Request $request, $id, $email, $comp_name)
    {
        $employee = Employee::findOrFail($id);
        $employee->accepted = Employee::ACCEPTED;
        $employee->save();

        $comp = Company::where('comp_name', $comp_name)->first();
        if (!$comp) {
            $comp = Company::create([
                'comp_name' => $comp_name,
                'address' => '/',
                'phone_num' => '/'
            ]);
        }

        $user = User::where('email', $email)->first();
        if (!$user) {
            $password = Str::random(8);
            $user = User::create([
                'email' => $email,
                'name' => Str::random(5),
                'last_name' => Str::random(5),
                'password' => Hash::make($password),
                'type' => '2'
            ]);
            $user->company_id = $comp->id; // Assign the newly created company's ID
            $user->save();

            Mail::to($employee->manager_email)->send(new EmployeeAccepted($employee, $password));
        }


        $notification = new Notification;
        $notification->student_id = $employee->stud_id;
        $notification->message = 'Your request to join '.$employee->nameComp.' as '.$employee->post.' has been accepted by department';
        $notification->save();

        return redirect('/list')->with('success', 'Employee accepted successfully.');
    }



    public function refuseEmployee(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->accepted = Employee::REFUSED;
        $employee->refusal_reason = $request->input('refusal_reason'); // Save the refusal reason from the form
        $employee->save();

        $notification = new Notification;
        $notification->student_id = $employee->stud_id;
        $notification->message = 'Your request to join '.$employee->nameComp.' as '.$employee->post.' has been refused by the department. Reason: '.$employee->refusal_reason;
        $notification->save();

        return redirect('/list')->with('success', 'Request refused successfully');
    }



    public function acceptByManager(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        // Check if there is an employee with the same stud_id, manager_validation=1, and dateE not equal to today's date
        $existingEmployee = Employee::where('stud_id', $employee->stud_id)
            ->where('manager_validation', Employee::ACCEPTED)
            ->whereDate('dateE', '>=', Carbon::today())
            ->first();

        if ($existingEmployee) {
            return redirect('/company/list2')->with('error', 'this student in intern now you cant accept him.');
        }

        $employee->manager_validation = Employee::ACCEPTED;
        $employee->save();

        $notification = new Notification;
        $notification->student_id = $employee->stud_id;
        $notification->message = 'Your request to join '.$employee->nameComp.' as '.$employee->post.' has been accepted by the manager of the company.';
        $notification->save();

        return redirect('/company/list2')->with('success', 'Request accepted successfully');
    }


    /**
     * Get the absence dates for the given start and end dates.
     *
     * @param  string  $startDate
     * @param  string  $endDate
     * @return array
     */
    private function getAbsenceDates($startDate, $endDate)
    {
        $dates = [];
        $currentDate = Carbon::parse($startDate);
        $endDate = Carbon::parse($endDate);

        while ($currentDate->lte($endDate)) {
            $dates[] = $currentDate->toDateString();
            $currentDate->addDay();
        }

        return $dates;
    }


    public function refuseByManager(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->manager_validation = Employee::REFUSED;
        $employee->save();
        $notification = new Notification;

        $notification->student_id = $employee->stud_id;
        $notification->message = 'Your request to join '.$employee->nameComp.' as '.$employee->post.' has been refused by manager of caompany';
        $notification->save();
        return redirect('/company/list2')->with('success', 'Request refused successfully');

    }
    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'card_num'=>'required',

            'social_num'=>'required',


            'dateS' => 'required',
            'dateE' => 'required',
            // 'file_path'=>'required',
            'College_year'=>'required',
            'nameComp'=>'required',
            'post'=>'required',
            'Speciality'=>'required',
            'education'=>'required',
        ]);

        $employee->post = $validatedData['post'];
        $employee->nameComp = $validatedData['nameComp'];
        $employee->dateS = $validatedData['dateS'];
        $employee->card_num = $validatedData['card_num'];

        $employee->social_num = $validatedData['social_num'];

        $employee->College_year = $validatedData['College_year'];
        $employee->Speciality = $validatedData['Speciality'];
        $employee->education = $validatedData['education'];

        $employee->save();

        return redirect()->route('recentReq')->with('success', 'Employee updated successfully.');
    }
    public function edit(Employee $employee){
        $companies = Company::all();
        return view('user/edit',compact('employee','companies'));
    }

    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->back()->with('success', 'Employee deleted successfully.');
    }

}
