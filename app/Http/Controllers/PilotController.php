<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PilotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pilot = Pilot::all();
        return view('admin.pilot.index', compact('pilot'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pilot.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'code_pilot' => [
                'min:5',
                'max:5',
                'required',
                Rule::unique('pilot', 'ma_phi_cong')
            ],
            'name_pilot' => 'max:25|required|string',
            'salary' => 'required|max:1000000'
        ]);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $validateData = $validated->validated();

        $pilot = new Pilot();

        $pilot->ma_phi_cong = $validateData['code_pilot'];
        $pilot->ten_phi_cong = $validateData['name_pilot'];
        $pilot->luong = $validateData['salary'];

        $pilot->save();

        return redirect()->route('pilot.index')
            ->with('success', "Nhập thông tin phi công thành công!");
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
        $pilot = Pilot::find($id);
        return view('admin.pilot.edit', compact('pilot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
           'code_pilot' => [
               'required',
               'max:5',
               'min:5',
               Rule::unique('pilot', 'ma_phi_cong')->ignore($id, 'ma_phi_cong')
           ],
            'name_pilot' => 'required|max:25|string',
            'salary' => 'required|max:1000000|'
        ]);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $validatedData = $validated->validated();

        $pilot = Pilot::find($id);

        $pilot->ma_phi_cong = $validatedData['code_pilot'];
        $pilot->ten_phi_cong = $validatedData['name_pilot'];
        $pilot->luong = $validatedData['salary'];

        return redirect()->route('pilot.index')
            ->with('success', "Thay đổi thông tin {$validatedData['code_pilot']} thành công");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pilot = Pilot::where('ma_phi_cong', $id)->firstOrFail();
        $pilot->delete();

        return redirect()->route('pilot.index')
            ->with('success', "Xóa thông tin phi công thành công");
    }
}
