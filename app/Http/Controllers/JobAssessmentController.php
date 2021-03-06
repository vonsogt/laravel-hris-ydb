<?php

namespace App\Http\Controllers;

use App\Models\JobAssessment;
use App\Http\Requests\StoreJobAssessmentRequest;
use App\Http\Requests\UpdateJobAssessmentRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class JobAssessmentController extends Controller
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

            $data = JobAssessment::select('*')->latest('id');

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
                ->addColumn('employee_name', function (JobAssessment $jobAssessment) {
                    return $jobAssessment->employee->name;
                })
                ->addColumn('employee_institution_number', function (JobAssessment $jobAssessment) {
                    return $jobAssessment->employee->institution_number;
                })
                ->addColumn('employee_institution_name', function (JobAssessment $jobAssessment) {
                    return $jobAssessment->employee->institution->name;
                })
                ->addColumn('total', function (JobAssessment $jobAssessment) {
                    return $jobAssessment->getTotalValue();
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                        <div class="d-flex gap-2">
                            <div class="show">
                                <a href="' . route('job-assessments.show', $row->id) . '" class="btn btn-sm btn-primary edit-item-btn">Lihat</a>
                            </div>
                            <div class="edit">
                                <a href="' . route('job-assessments.edit', $row->id) . '" class="btn btn-sm btn-success edit-item-btn">Ubah</a>
                            </div>
                            <div class="remove">
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger remove-item-btn" onclick="deleteEntry(this)" data-route="' . route("job-assessments.destroy", [$row->id]) . '">Hapus</a>
                            </div>
                        </div>
                    ';

                    if (auth()->getDefaultDriver() == 'api')
                        $btn = '
                            <div class="d-flex gap-2">
                                <div class="show">
                                    <a href="' . route('employee.job-assessments.show', $row->id) . '" class="btn btn-sm btn-primary edit-item-btn">Lihat</a>
                                </div>
                            </div>
                        ';


                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('job-assessments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::get()->pluck('name', 'id');

        return view('job-assessments.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobAssessmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobAssessmentRequest $request)
    {
        $jobAssessment = JobAssessment::create($request->all());

        return redirect()->route('job-assessments.index')->with('message', 'Penilaian kerja berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobAssessment  $jobAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(JobAssessment $jobAssessment)
    {
        if (auth()->getDefaultDriver() == 'api') {
            if ($jobAssessment->employee->id != auth()->user()->id) {
                return abort(404);
            }
        }

        return view('job-assessments.show', compact('jobAssessment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobAssessment  $jobAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit(JobAssessment $jobAssessment)
    {
        $employees = Employee::get()->pluck('name', 'id');

        return view('job-assessments.edit', compact('jobAssessment', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobAssessmentRequest  $request
     * @param  \App\Models\JobAssessment  $jobAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobAssessmentRequest $request, JobAssessment $jobAssessment)
    {
        $jobAssessment->update($request->all());

        return redirect()->route('job-assessments.index')->with('message', 'Penilaian kerja berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobAssessment  $jobAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobAssessment $jobAssessment)
    {
        return $jobAssessment->delete();
    }
}
