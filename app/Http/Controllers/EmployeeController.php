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

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Employee::with(['institution', 'position'])->select('*')->latest('id');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('institution_number', function ($row) {
                    return '<a class="fw-semibold" href="' . route('employees.show', $row->id) . '">' . $row->institution_number . '</a>';
                })
                ->addColumn('institution_name', function (Employee $employee) {
                    return $employee->institution->name;
                })
                ->addColumn('position_name', function (Employee $employee) {
                    return $employee->position->name;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                        <div class="d-flex gap-2">
                            <div class="edit">
                                <a href="' . route('employees.edit', $row->id) . '" class="btn btn-sm btn-success edit-item-btn">Ubah</a>
                            </div>
                            <div class="remove">
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger remove-item-btn" onclick="deleteEntry(this)" data-route="' . route("employees.destroy", [$row->id]) . '">Hapus</a>
                            </div>
                        </div>
                    ';

                    return $btn;
                })
                ->rawColumns(['institution_number', 'action'])
                ->make(true);
        }

        return view('employees.index');
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
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
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

    
}
