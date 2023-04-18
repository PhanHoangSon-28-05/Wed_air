<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use App\Models\Certification;
use App\Models\Pilot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certification = Certification::all();
        return view('admin.certification.index', compact('certification'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aircraft = Aircraft::all();
        $pilot = Pilot::all();

        return view('admin.certification.add', compact('aircraft', 'pilot'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
           'ma_phi_co' => [
               'required',
               Rule::unique('certification')->where(function ($query) use ($request) {
                   return $query->where([
                       'ma_phi_cong' => $request->input('ma_phi_cong'),
                       'ma_phi_co' => $request->input('ma_phi_co')
                   ]);
               })
           ],
           'ma_phi_cong' => [
               'required',
               Rule::unique('certification', 'ma_phi_co')->where(function ($query) use ($request) {
                   return $query
                       ->where('ma_phi_co', $request->input('ma_phi_co'))
                       ->where('ma_phi_cong', $request->input('ma_phi_cong'));
               })
           ]
        ]);

        $validatedDate = $validated->validated();

        $certification = new Certification();

        $certification->ma_phi_cong = $validatedDate['ma_phi_cong'];
        $certification->ma_phi_co = $validatedDate['ma_phi_co'];

        $certification->save();

        return redirect()->route('certification.index')
            ->with('success', "Nhập dữ liệu chứng nhận thành công");
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
        $certification = Certification::find($id);
        $aircraft = Aircraft::all();
        $pilot = Pilot::all();
        return view('admin.certification.edit', compact(
            'certification',
            'aircraft',
            'pilot'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
            'ma_phi_co' => [
                'required',
                Rule::unique('certification')->where(function ($query) use ($request) {
                    return $query->where([
                        'ma_phi_cong' => $request->input('ma_phi_cong'),
                        'ma_phi_co' => $request->input('ma_phi_co')
                    ]);
                })
            ],
            'ma_phi_cong' => [
                'required',
                Rule::unique('certification', 'ma_phi_co')->where(function ($query) use ($request) {
                    return $query
                        ->where('ma_phi_co', $request->input('ma_phi_co'))
                        ->where('ma_phi_cong', $request->input('ma_phi_cong'));
                })
            ]
        ]);

        $validatedDate = $validated->validated();

        $certification = Certification::find($id);

        $certification->ma_phi_cong = $validatedDate['ma_phi_cong'];
        $certification->ma_phi_co = $validatedDate['ma_phi_co'];

        $certification->save();

        return redirect()->route('certification.index')
            ->with('success', "Thay đổi dữ liệu chứng nhận thành công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $certification = Certification::where('id', $id)->firstOrFail();
        $certification->delete();

        return redirect()->route('certification.index')
            ->with('success', "Xóa thành công");
    }
}
