<?php

namespace App\Http\Controllers;

use App\Models\Appreciation;
use App\Http\Requests\StoreAppreciationRequest;
use App\Http\Requests\UpdateAppreciationRequest;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class AppreciationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Appreciation::select('*')->with(['employee'])->latest('id');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('employee_name', function (Appreciation $appreciation) {
                    return $appreciation->employee->name;
                })
                ->addColumn('employee_institution_name', function (Appreciation $appreciation) {
                    return $appreciation->employee->institution->name;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                        <div class="d-flex gap-2">
                            <div class="show">
                                <a href="' . route('appreciations.show', $row->id) . '" class="btn btn-sm btn-primary edit-item-btn">Lihat</a>
                            </div>
                            <div class="edit">
                                <a href="' . route('appreciations.edit', $row->id) . '" class="btn btn-sm btn-success edit-item-btn">Ubah</a>
                            </div>
                            <div class="remove">
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger remove-item-btn" onclick="deleteEntry(this)" data-route="' . route("appreciations.destroy", [$row->id]) . '">Hapus</a>
                            </div>
                        </div>
                    ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('appreciations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::get()->pluck('name', 'id');

        return view('appreciations.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppreciationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppreciationRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('files')) {

            $files = $request->file('files');
            $fileName = time() . '_' . $files->getClientOriginalName();
            $filePath = $files->storeAs('uploads/penghargaan', $fileName, 'public');
            $data['files'] = 'penghargaan/' . $fileName;
        }

        $appreciation = Appreciation::create($data);

        return redirect()->route('appreciations.index')->with('message', 'Penghargaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appreciation  $appreciation
     * @return \Illuminate\Http\Response
     */
    public function show(Appreciation $appreciation)
    {
        return view('appreciations.show', compact('appreciation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appreciation  $appreciation
     * @return \Illuminate\Http\Response
     */
    public function edit(Appreciation $appreciation)
    {
        $employees = Employee::get()->pluck('name', 'id');

        return view('appreciations.edit', compact('appreciation', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppreciationRequest  $request
     * @param  \App\Models\Appreciation  $appreciation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppreciationRequest $request, Appreciation $appreciation)
    {
        $data = $request->all();

        if ($request->hasFile('files')) {

            $pathFile = public_path('storage/uploads') . '/' . $appreciation->files;
            if ($appreciation->files && File::exists($pathFile)) {
                File::delete($pathFile);
            };

            $files = $request->file('files');
            $fileName = time() . '_' . $files->getClientOriginalName();
            $filePath = $files->storeAs('uploads/penghargaan', $fileName, 'public');
            $data['files'] = 'penghargaan/' . $fileName;
        }

        $appreciation->update($data);

        return redirect()->route('appreciations.index')->with('message', 'Penghargaan berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appreciation  $appreciation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appreciation $appreciation)
    {
        return $appreciation->delete();
    }

    public static function bytesToHuman($bytes)
    {
        $units = ['B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }
}
