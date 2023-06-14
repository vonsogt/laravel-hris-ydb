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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (request()->route() != null && str_contains(request()->route()->getPrefix(), 'employee')) {
            $this->middleware('api');
        } else {
            $this->middleware('auth');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Decree::select('*')
                ->whereHas('employee', function ($query) {
                    $query->active();
                })
                ->with(['employee'])
                ->latest('id');

            if (auth()->getDefaultDriver() == 'api') {
                $data = $data->where('employee_id', auth()->user()->id);
            }

            return DataTables::of($data->get())
                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('search')['value'])) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                            if (\Str::contains(\Str::lower($row['employee_name']), \Str::lower($request->get('search')['value']))) {
                                return true;
                            }
                            return false;
                        });
                    }
                })
                ->addIndexColumn()
                ->addColumn('employee_name', function (Decree $decree) {
                    return $decree->employee->name ?? '-';
                })
                ->addColumn('employee_institution_name', function (Decree $decree) {
                    return $decree->employee->institution->name ?? '-';
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

                    if (auth()->getDefaultDriver() == 'api') {
                        $btn = '
                            <div class="d-flex gap-2">
                                <div class="show">
                                    <a href="' . route('employee.decrees.show', $row->id) . '" class="btn btn-sm btn-primary edit-item-btn">Lihat</a>
                                </div>
                                <div class="download">
                                    <a href="' . ($row->files ? (url('storage/uploads') . '/' . $row->files) : 'javascript:void(0)') . '" onclick="' . (!$row->files ? "Swal.fire({ icon: 'error', title: 'Oops...', text: 'Sepertinya file SK tidak ada!'})" : '') . '" class="btn btn-sm btn-success download-item-btn">Unduh</a>
                                </div>
                            </div>
                        ';

                        if (auth()->user()->position->name == 'Staf HRD') {
                            $btn = '
                                <div class="d-flex gap-2">
                                    <div class="show">
                                        <a href="' . route('employee.decrees.show', $row->id) . '" class="btn btn-sm btn-primary edit-item-btn">Lihat</a>
                                    </div>
                                    <div class="edit">
                                        <a href="' . route('employee.decrees.edit', $row->id) . '" class="btn btn-sm btn-success edit-item-btn">Ubah</a>
                                    </div>
                                    <div class="download">
                                        <a href="' . ($row->files ? (url('storage/uploads') . '/' . $row->files) : 'javascript:void(0)') . '" onclick="' . (!$row->files ? "Swal.fire({ icon: 'error', title: 'Oops...', text: 'Sepertinya file SK tidak ada!'})" : '') . '" class="btn btn-sm btn-success download-item-btn">Unduh</a>
                                    </div>
                                </div>
                            ';
                        }
                    }

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

        if (auth()->getDefaultDriver() == 'api') {
            return redirect()->route('employee.decrees.index')->with('message', 'Surat Keputusan berhasil ditambahkan.');
        } else {
            return redirect()->route('decrees.index')->with('message', 'Surat Keputusan berhasil ditambahkan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function show(Decree $decree)
    {
        if (auth()->getDefaultDriver() == 'api') {
            if ($decree->employee->id != auth()->user()->id) {
                return abort(404);
            }
        }

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

        if (auth()->getDefaultDriver() == 'api') {
            return redirect()->route('employee.decrees.index')->with('message', 'Surat Keputusan berhasil diubah.');
        } else {
            return redirect()->route('decrees.index')->with('message', 'Surat Keputusan berhasil diubah.');
        }
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
