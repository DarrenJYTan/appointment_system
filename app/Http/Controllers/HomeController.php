<?php

namespace App\Http\Controllers;

use App\Models\AppointmentList;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function getAppointmentCode(Request $req)
    {
        $dataList = new AppointmentList;
        $dataList->save();
    }

    public function storeAppointmentCode(Request $req)
    {
        $dataList = new AppointmentList;
        $dataList->appointmentCode = $req->input('appointmentCode');
        $dataList->save();
        //return redirect('patient.home')->with('Appointment code is send', 'Plese wait');
    }

}
