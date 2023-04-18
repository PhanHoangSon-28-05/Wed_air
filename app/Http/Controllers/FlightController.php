<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flights = Flight::all();
        return view('admin.flight.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $location = Location::all();
        return view('admin.flight.add', compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'code_flight' => [
                'required',
                'min:5',
                'max:5',
                Rule::unique('flight', 'ma_cb') // bat loi tao ma chuyen bay trung nhau
            ],
            'place_of_departure' => 'required|different:place_of_arrival',
            'place_of_arrival' => 'required',
            'departure_time' => 'required|different:arrival_time',
            'arrival_time' => 'required',
        ]);

        if($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $validatedData = $validated->validated();

        $flight = new Flight();

        $flight->ma_cb = $validatedData['code_flight'];
        $flight->noi_xp = $validatedData['place_of_departure'];
        $flight->noi_den = $validatedData['place_of_arrival'];
        // $flight->gio_xp =  Carbon::createFromFormat('H:i d/m/Y', $validatedData['departure_time']);
        // $flight->gio_den = Carbon::createFromFormat('H:i d/m/Y', $validatedData['arrival_time']);
        $flight->gio_xp =  $validatedData['departure_time'];
        $flight->gio_den =  $validatedData['arrival_time'];

        $flight->save();

        return redirect()
            ->route('flight.index')
            ->with('success', "Tạo chuyến bay với mã {$validatedData['code_flight']} thành công!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ma_cb)
    {
        $location = Location::all();
        $flight = Flight::where('ma_cb', $ma_cb)->first();
        return view('admin.flight.edit', compact('flight', 'location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ma_cb)
    {
        $validated = Validator::make($request->all(), [
            'code_flight' => [
                'required',
                'min:5',
                'max:5',
                Rule::unique('flight', 'ma_cb')->ignore($ma_cb, 'ma_cb')
            ],
            'place_of_departure' => 'required|different:place_of_arrival',
            'place_of_arrival' => 'required',
            'departure_time' => 'required|different:arrival_time',
            'arrival_time' => 'required',
        ]);

        if($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $validatedData = $validated->validated();

        $flight = Flight::find($ma_cb);

        $flight->ma_cb = $validatedData['code_flight'];
        $flight->noi_xp = $validatedData['place_of_departure'];
        $flight->noi_den = $validatedData['place_of_arrival'];
        // $flight->gio_xp =  Carbon::createFromFormat('H:i', $validatedData['departure_time']);
        // $flight->gio_den = Carbon::createFromFormat('H:i', $validatedData['arrival_time']);
        $flight->gio_xp =  $validatedData['departure_time'];
        $flight->gio_den =  $validatedData['arrival_time'];


        $flight->save();

        return redirect()
            ->route('flight.index')
            ->with('success', "Cập nhật thông tin chuyến bay với mã {$validatedData['code_flight']} thành công!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $ma_cb)
    {
        $flight = Flight::where('ma_cb', $ma_cb)->firstOrFail();
        $flight->delete();

        return redirect()->route('flight.index')->with('success', "Xóa thành công!");
    }
}
