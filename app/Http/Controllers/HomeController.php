<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use App\Models\Certification;
use App\Models\Flight;
use App\Models\Location;
use App\Models\Pilot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $list_flight_to_hanoi = Flight::where('noi_den', 'Hà Nội')->get();
        $list_flight_to_danang = Flight::where('noi_den', 'Đà Nẵng')->get();
        $list_flight_to_hcm = Flight::where('noi_den', 'Hồ Chí Minh')->get();

        $location = Location::all();

        return view('home.home', [
            'to_hanoi' => $list_flight_to_hanoi,
            'to_danang' => $list_flight_to_danang,
            'to_hcm' => $list_flight_to_hcm,
            'tinh_thanh' => $location
        ]);
    }

    public function searchFlight(Request $request)
    {
        $noi_xp = $request->input('noi_xp');
        $noi_den = $request->input('noi_den');

        $query = DB::table('flight')
            ->where('noi_xp', $noi_xp)
            ->where('noi_den', $noi_den);

        $chuyenbay = $query->paginate(5);

        return view('home.search_flight', compact('chuyenbay'));
    }

    public function listFlight()
    {
        $list_flight = Flight::paginate(5);
        return view('home.list_flight', compact('list_flight'));
    }

    public function listAircraft()
    {
        $list_aircraft = Aircraft::all();
        return view('home.list_aircraft', compact('list_aircraft'));
    }

    public function listPilot()
    {
        $list_pilot = Pilot::all();
        return view('home.list_pilot', compact('list_pilot'));
    }

    public function listCertification()
    {
        $list_certification = Certification::all();
        return view('home.list_certification', compact('list_certification'));
    }
}
