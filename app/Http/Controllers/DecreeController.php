<?php

namespace App\Http\Controllers;

use App\Models\Decree;
use App\Http\Requests\StoreDecreeRequest;
use App\Http\Requests\UpdateDecreeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class DecreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Decree::select('*')->with(['employee'])->latest('id');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('employee_name', function (Decree $decree) {
                    return $decree->employee->name;
                })
                ->addColumn('employee_institution_name', function (Decree $decree) {
                    return $decree->employee->institution->name;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                        <div class="d-flex gap-2">
                            <div class="show">
                                <a href="' . route('decrees.show', $row->id) . '" class="btn btn-sm btn-primary edit-item-btn">Lihat</a>
                            </div>
                            <div class="edit">
                                <a href="' . route('decrees.edit', $row->id) . '" class="btn btn-sm btn-success edit-item-btn">Ubah</a>
                            </div>
                            <div class="remove">
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger remove-item-btn" onclick="deleteEntry(this)" data-route="' . route("decrees.destroy", [$row->id]) . '">Hapus</a>
                            </div>
                        </div>
                    ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('decrees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::get()->pluck('name', 'id');

        return view('decrees.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDecreeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDecreeRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('files')) {

            $files = $request->file('files');
            $fileName = time() . '_' . $files->getClientOriginalName();
            $filePath = $files->storeAs('uploads/sk', $fileName, 'public');
            $data['files'] = 'sk/' . $fileName;
        }

        $appreciation = Decree::create($data);

        return redirect()->route('decrees.index')->with('message', 'Surat Keputusan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function show(Decree $decree)
    {
        return view('decrees.show', compact('decree'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function edit(Decree $decree)
    {
        $employees = Employee::get()->pluck('name', 'id');

        return view('decrees.edit', compact('decree', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDecreeRequest  $request
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDecreeRequest $request, Decree $decree)
    {
        $data = $request->all();

        if ($request->hasFile('files')) {

            $pathFile = public_path('storage/uploads') . '/' . $decree->files;
            if ($decree->files && File::exists($pathFile)) {
                File::delete($pathFile);
            };

            $files = $request->file('files');
            $fileName = time() . '_' . $files->getClientOriginalName();
            $filePath = $files->storeAs('uploads/sk', $fileName, 'public');
            $data['files'] = 'sk/' . $fileName;
        }

        $decree->update($data);

        return redirect()->route('decrees.index')->with('message', 'Surat Keputusan berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Decree $decree)
    {
        return $decree->delete();
    }
}
