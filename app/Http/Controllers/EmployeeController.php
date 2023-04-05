<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index()
    {




        $employees = Employee::all();
        return view('list', ['employees' => $employees]);

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

    public function accept($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->accepted = true;
        $employee->save();
        return redirect('/list')->with('success', 'Request accepted successfully');
    }

    public function refuse($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->accepted = false;
        $employee->save();

    }
    public function acceptEmployee(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->accepted = Employee::ACCEPTED;
        $employee->save();
        return redirect('/list')->with('success', 'Request accepted successfully');
        // do something else, like redirect back
    }

    public function refuseEmployee(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->accepted = Employee::REFUSED;
        $employee->save();
        return redirect('/list')->with('success', 'Request refused successfully');
        // do something else, like redirect back
    }
}
