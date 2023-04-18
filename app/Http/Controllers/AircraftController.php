<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aircraft = Aircraft::all();
        return view('admin.aircraft.index', compact('aircraft'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.aircraft.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'code_aircraft' => [
                'required',
                'min:4',
                'max:5',
                Rule::unique('aircraft', 'ma_phi_co')
            ],
            'name_aircraft' => 'required|max:25|string',
            'max_flight_distance' => 'required',
        ]);

        if($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $validatedData = $validated->validated();

        $aircraft = new Aircraft();

        $aircraft->ma_phi_co = $validatedData['code_aircraft'];
        $aircraft->ten_phi_co = $validatedData['name_aircraft'];
        $aircraft->kc_bay = $validatedData['max_flight_distance'];

        $aircraft->save();

        return redirect()->route('aircraft.index')->with('success', "Nhập thông tin phi cơ thành công!");
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
    public function edit(string $id)
    {
        $aircraft = Aircraft::find($id);
        return view('admin.aircraft.edit', compact('aircraft'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
            'code_aircraft' => [
                'required',
                'min:4',
                'max:5',
                Rule::unique('aircraft', 'ma_phi_co')->ignore($id, 'ma_phi_co')
            ],
            'name_aircraft' => 'required|max:25|string',
            'max_flight_distance' => 'required',
        ]);

        if($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $validatedData = $validated->validated();

        $aircraft = Aircraft::find($id);

        $aircraft->ma_phi_co = $validatedData['code_aircraft'];
        $aircraft->ten_phi_co = $validatedData['name_aircraft'];
        $aircraft->kc_bay = $validatedData['max_flight_distance'];

        $aircraft->save();

        return redirect()->route('aircraft.index')
            ->with('success', "Thay đổi thông tin phi cơ mã {$validatedData['code_aircraft']} thành công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aircraft = Aircraft::where('ma_phi_co', $id)->firstOrFail();
        $aircraft->delete();

        return redirect()->route('aircraft.index')
            ->with('success', "Xóa thông tin phi cơ thành công");
    }
}
