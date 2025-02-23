<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Truck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


class TruckController extends Controller
{
    public function index(Request $request)
    {

        return view('home');
    }

    public function track(Request $request)
    {


        if ($request->has('number')) {
            $check = Truck::where('number', $request->number)->first();
            if (empty($check)) {
                return redirect('/')->with('error', 'Incorrect number, please input a valid number.');
            } else {
                $getLastStatus = Truck::join('truck_event', 'truck.id', '=', 'truck_event.truck_id')->where('truck.number', $request->number)->where('status_truck_event', 1)->get()->last();
                return view('track', [
                    'truck_detail' => $check,
                    'getlaststatus' => $getLastStatus,
                    'request' => $request
                ]);
            }
        } else {

            return redirect('/')->with('error', 'Please input the number.');
        }

        return view('track');
    }
}
