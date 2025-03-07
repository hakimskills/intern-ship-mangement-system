<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //

    public function delete($id)
    {

        $notification = Notification::findOrFail($id);
        $notification->delete();

        return redirect()->back()->with('success', 'Employee deleted successfully.');
    }

}
