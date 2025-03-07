<?php

namespace App\Mail;

use App\Models\Employee;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmployeeAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $employee;
    public $password;

    public function __construct(Employee $employee, $password)
    {
        $this->employee = $employee;
        $this->password = $password;
    }

    public function build()
    {
        return $this->from('abdelhakim.rebbouh@univ-constantine2.dz')
            ->subject('we create a account for you in career bridge ')
            ->view('emails.employeeAccepted')
            ->with('employee', $this->employee);
    }



}
