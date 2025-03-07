<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Employee;
use App\Models\Intern;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{

    public function index($id)

    {

        $employee = Employee::findOrFail($id);
        $absenceDates = $employee->absences()->pluck('date')->toArray();

        return view('/company/grade', compact('employee', 'absenceDates'));
    }
    public function listInManager()
    {
        $employees = Employee::where('manager_validation', Employee::ACCEPTED)->get();
        return view('company/interns', ['employees' => $employees]);
    }




    public function manage(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $absenceDates = $request->input('attendance', []);

        // Create absence records
        foreach ($absenceDates as $date) {
            // Check if the absence record already exists for the given date
            $existingAbsence = Absence::where('employee_id', $employee->id)
                ->where('date', $date)
                ->first();

            if ($existingAbsence) {
                return redirect()->route('interns')->with('error', 'You have already marked the absence for ' . $date . '.');
            } else {
                $absence = new Absence();
                $absence->employee_id = $employee->id;
                $absence->date = $date;
                $absence->save();
            }
        }

        // Redirect back or to another page
        return redirect()->route('interns')->with('success', 'the absence added successfully for: ' . $date . '.');
    }

public function rate(Request $request, $id){
    $validatedData = $request->validate([


        'general_discipline'=>'required',


        'work_skills' => 'required',
        'initiative' => 'required',
        'imagination'=>'required',
        // 'file_path'=>'required',
        'knowledge'=>'required',


    ]);
    $employee = Employee::findOrFail($id);

    if ($employee->rated) {
        return redirect()->route('interns')->with('error', 'You have already rated ' . $employee->name . ' ' . $employee->last_name . '.');
    }



    $ratings = $request->only(['general_discipline', 'work_skills', 'initiative', 'imagination', 'knowledge']);

    $finalMark = $this->calculateFinalMark($ratings);

    $rating = new Rating();
    $rating->general_discipline= $request->general_discipline;
    $rating->work_skills= $request->work_skills;
    $rating->initiative= $request->initiative;
    $rating-> imagination=$request->imagination;
    $rating->knowledge= $request->knowledge;
    $rating->employee_id = $employee->id;
    $rating->final_mark = $finalMark;
    $rating->save();



    $employee->rated = true;
    $employee->save();

    // Redirect back or to another page
    return redirect()->route('interns')->with('success', 'You have rated ' . $employee->name . ' ' . $employee->last_name . '.');

}






    /**
     * Calculate the final mark based on the ratings.
     *
     * @param  array  $ratings
     * @return float
     */
    private function calculateFinalMark(array $ratings)
    {
        $totalPoints = 0;
        foreach ($ratings as $rating) {
            $totalPoints += $rating;
        }

        $finalMark = $totalPoints / count($ratings) * 5;
        return round($finalMark, 2);
    }


    public function mark()
    {
        $userId = Auth::user()->id;
        $user = User::with(['employees.ratings', 'employees.absences'])
            ->where('id', $userId)
            ->first();

        $employees = $user->employees->where('manager_validation', 1);

        $employeeData = [];

        foreach ($employees as $employee) {
            $id = $employee->id;
            $nameComp = $employee->nameComp;
            $last_name = $employee->last_name;
            $name = $user->name;
            $managerN = $employee->manager_email ? User::where('email', $employee->manager_email)->first()->name : null;
            $managerL = $employee->manager_email ? User::where('email', $employee->manager_email)->first()->last_name : null;
            $finalMark = $employee->ratings->last()->final_mark ?? null;
            $absences = $employee->absences;
            $dateS = $employee->dateS;
            $dateE = $employee->dateE;
            $post = $employee->post;
            $Speciality = $employee->Speciality;

            // Get the number of absences and the corresponding dates
            $absenceCount = count($absences);
            $absenceDates = $absences->pluck('date')->toArray();

            $employeeData[] = [
                'id' => $id,
                'nameComp' => $nameComp,
                'last_name' => $last_name,
                'name' => $name,
                'managerN' => $managerN,
                'managerL' => $managerL,
                'finalMark' => $finalMark,
                'absenceCount' => $absenceCount,
                'absenceDates' => $absenceDates,
                'dateS' => $dateS,
                'dateE' => $dateE,
                'post' => $post,
                'Speciality' => $Speciality,
            ];
        }

        return view('marks', compact('employeeData'));
    }


    public function rateForm($id)

    {

        $employee = Employee::findOrFail($id);

        return view('/company/note', compact('employee'));
    }
    }
