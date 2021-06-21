<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Appointments;
use App\Model\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointmentslists = Appointments::orderByDesc('created_at')->get();
        // dd($appointmentslist);
        return view('admin-views.appointment.index', compact('appointmentslists'));
    }
}
