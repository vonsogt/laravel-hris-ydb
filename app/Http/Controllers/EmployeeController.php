<?php

namespace App\Http\Controllers;

use App\Enums\BloodType;
use App\Enums\Education;
use App\Enums\Gender;
use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Institution;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeesExport;
use Carbon\Carbon;

class EmployeeController extends Controller
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

            $data = Employee::with(['institution', 'position'])->select('*')->latest('id');
            $resign = $request->resign;

            // Without global scope
            if ($resign == 'true') {
                $data = $data->withoutGlobalScope('active')->whereNotNull('deactive_at');

            }

            // Except the current user
            if (auth()->getDefaultDriver() == 'api') {
                $data = $data->where('id', '!=', auth()->user()->id);
            }

            if ($request->month || $request->year) {
                $data = $data->whereYear('join_date', $request->year)
                    ->whereMonth('join_date', $request->month);
            }

            return DataTables::of($data->get())
                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('search')['value'])) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($request) {

                            if (\Str::contains(\Str::lower($row['institution_number']), \Str::lower($request->get('search')['value']))) {
                                return true;
                            }

                            if (\Str::contains(\Str::lower($row['institution_name']), \Str::lower($request->get('search')['value']))) {
                                return true;
                            }

                            if (\Str::contains(\Str::lower($row['position_name']), \Str::lower($request->get('search')['value']))) {
                                return true;
                            }

                            if (\Str::contains(\Str::lower($row['name']), \Str::lower($request->get('search')['value']))) {
                                return true;
                            }

                            if (\Str::contains(\Str::lower($row['join_date']), \Str::lower($request->get('search')['value']))) {
                                return true;
                            }

                            return false;
                        });
                    }
                })
                ->addIndexColumn()
                ->addColumn('institution_number', function ($row) {
                    if (auth()->getDefaultDriver() == 'api') {
                        return $row->institution_number;
                    }
                    return '<a class="fw-semibold" href="' . route('employees.show', $row->id) . '">' . $row->institution_number . '</a>';
                })
                ->addColumn('institution_name', function (Employee $employee) {
                    return $employee->institution->name;
                })
                ->addColumn('position_name', function (Employee $employee) {
                    return $employee->position->name;
                })
                ->addColumn('action', function ($row) {
                    if (auth()->getDefaultDriver() == 'web') {
                        $btn = '
                            <div class="d-flex gap-2">
                                <div class="edit">
                                    <a href="' . route('employees.edit', $row->id) . '" class="btn btn-sm btn-success edit-item-btn">Ubah</a>
                                </div>
                            </div>';
                    } else {
                        $btn = '
                            <div class="d-flex gap-2">
                                <div class="edit">
                                    <a href="' . route('employee.employees.edit', $row->id) . '" class="btn btn-sm btn-success edit-item-btn">Ubah</a>
                                </div>
                                <!--
                                <div class="remove">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger remove-item-btn" onclick="deleteEntry(this)" data-route="' . route("employee.employees.destroy", [$row->id]) . '">Hapus</a>
                                </div>
                                -->
                                <div class="non-active">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-warning non-active-item-btn" onclick="nonActiveEntry(this)" data-route="' . route("employee.employees.non-active", [$row->id]) . '">Non Aktifkan</a>
                                </div>
                            </div>
                        ';
                        if ($row->deactive_at) {
                            $btn = '
                                <div class="d-flex gap-2">
                                    <div class="edit">
                                        <a href="' . route('employee.employees.edit', $row->id) . '" class="btn btn-sm btn-success edit-item-btn">Ubah</a>
                                    </div>
                                </div>
                            ';
                        }
                    }

                    return $btn;
                })
                ->rawColumns(['institution_number', 'action'])
                ->make(true);
        }

        $institutionOptions = Institution::get()->pluck('name', 'id');

        return view('employees.index', compact('institutionOptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['genderOptions'] = Gender::asSelectArray();
        $data['bloodTypeOptions'] = BloodType::asSelectArray();
        $data['educationOptions'] = Education::asSelectArray();
        $data['institutionOptions'] = Institution::get()->pluck('name', 'id');
        $data['positionOptions'] = Position::get()->pluck('name', 'id');

        return view('employees.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        if ($photo = $request->photo) {
            $photo = json_decode($photo);

            $photoName = 'pegawai/' . $photo->id . '_' . $photo->name;
            $path = public_path('uploads/images/');

            $request->merge(['photo' => $photoName]);

            File::isDirectory($path . 'pegawai') or File::makeDirectory($path . 'pegawai', 0777, true, true);
            File::put($path . '/' . $photoName, base64_decode($photo->data));
        }

        $password = Hash::make($request->password ?? '123456');
        $request->merge(['password' => $password]);

        $employee = Employee::create($request->all());

        return redirect()->route('employees.index')->with('message', 'Pegawai berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        if (auth()->getDefaultDriver() == 'api') {
            if ($employee->id != auth()->user()->id) {
                return abort(404);
            }
        }

        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($employee_id)
    {
        $employee = Employee::withoutGlobalScope('active')->find($employee_id);

        if (auth()->getDefaultDriver() == 'api' && auth()->user()->position->name != 'Kepala HRD') {
            if ($employee->id != auth()->user()->id) {
                return abort(404);
            }
        }

        $data['genderOptions'] = Gender::asSelectArray();
        $data['bloodTypeOptions'] = BloodType::asSelectArray();
        $data['educationOptions'] = Education::asSelectArray();
        $data['institutionOptions'] = Institution::get()->pluck('name', 'id');
        $data['positionOptions'] = Position::get()->pluck('name', 'id');

        return view('employees.edit', compact('employee', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        if ($employee->photo) {
            File::delete(public_path('uploads/images') . '/' . $employee->photo);
        }

        if ($photo = $request->photo) {
            $photo = json_decode($photo);

            $photoName = 'pegawai/' . $photo->id . '_' . $photo->name;
            $path = public_path('uploads/images');

            $request->merge(['photo' => $photoName]);

            File::isDirectory($path . '/' . 'pegawai') or File::makeDirectory($path . '/' . 'pegawai', 0777, true, true);
            File::put($path . '/' . $photoName, base64_decode($photo->data));
        } else {
            $request->merge(['photo' => null]);
        }

        if ($request->password != $employee->password) {
            $password = Hash::make($request->password ?? '123456');
            $request->merge(['password' => $password]);
        }

        $employee->update($request->all());

        if (auth()->getDefaultDriver() == 'api') {
            return redirect()->route('employee.employees.index')->with('message', 'Pegawai berhasil diubah.');
        }

        return redirect()->route('employees.index')->with('message', 'Pegawai berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        return $employee->delete();
    }

    /**
     * handleUploadedImage
     *
     * @param  mixed $image
     * @return void
     */
    public function handleUploadedImage($image): void
    {
        if (!is_null($image)) {
            $image->move(public_path('images') . 'temp');
        }
    }

    public function export(Request $request, $type = 'xlsx')
    {
        $fileName = 'employees_' . time() . '.' . $type;

        if ($type == 'pdf') {
            return Excel::download(new EmployeesExport, $fileName, \Maatwebsite\Excel\Excel::MPDF);
        }

        return Excel::download(new EmployeesExport, $fileName);
    }

    public function nonActive(Request $request, $employee_id)
    {
        $employee = Employee::find($employee_id);
        $employee->deactive_at = $request->date ?? now();
        $employee->deactive_reason = $request->reason;

        if ($employee->save()) {
            return response()->json([
                'success' => true,
                'message' => 'Pegawai berhasil dinonaktifkan.',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Pegawai gagal dinonaktifkan.',
        ]);
    }
}
