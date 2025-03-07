<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CertificateController extends Controller
{


    public function createPDF($id)
    {
        $employee = Employee::findOrFail($id);
        $managerLast = $employee->manager->last_name;
        $managerName = $employee->manager->name;
        $companyAddress = Company::where('comp_name', $employee->nameComp)->value('address');

        $pdf = PDF::loadView('certificate', compact('employee', 'managerName', 'companyAddress', 'managerLast'));
        $pdf->setPaper([0, 0, 396.85, 695.276], 'landscape'); // Set paper type to "Pits" and orientation to landscape
        return $pdf->download('certificate.pdf');
    }




}
