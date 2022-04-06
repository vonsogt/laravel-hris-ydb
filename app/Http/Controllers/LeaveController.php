<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Http\Requests\StoreLeaveRequest;
use App\Http\Requests\UpdateLeaveRequest;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Leave::select('*')->with(['employee'])->latest('id');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('is_approve', function ($row) {
                    if ($row->is_approve !== null) {
                        if ($row->is_approve == 1) {
                            return '<button type="button" class="btn btn-success">Disetujui</button>';
                        } else if ($row->is_approve == 0) {
                            return '<button type="button" class="btn btn-danger">Ditolak</button>';
                        }
                    }
                    return '-';
                })
                ->addColumn('employee_name', function (Leave $leave) {
                    return $leave->employee->name;
                })
                ->addColumn('employee_institution_number', function (Leave $leave) {
                    return $leave->employee->institution_number;
                })
                ->addColumn('submission_date', function ($row) {
                    return Carbon::make($row->submission_date)->format('d-M-Y');
                })
                ->addColumn('start_date', function ($row) {
                    return Carbon::make($row->start_date)->format('d-M-Y');
                })
                ->addColumn('end_date', function ($row) {
                    return Carbon::make($row->end_date)->format('d-M-Y');
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                        <div class="d-flex gap-2">
                            <div class="edit">
                                <a href="' . route('leaves.edit', $row->id) . '" class="btn btn-sm btn-success edit-item-btn">Ubah</a>
                            </div>
                            <div class="remove">
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger remove-item-btn" onclick="deleteEntry(this)" data-route="' . route("leaves.destroy", $row->id) . '">Hapus</a>
                            </div>
                        </div>
                    ';

                    return $btn;
                })
                ->rawColumns(['is_approve', 'action'])
                ->make(true);
        }

        return view('leaves.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::get()->pluck('name', 'id');

        return view('leaves.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeaveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaveRequest $request)
    {
        $leave = Leave::create($request->all());

        return redirect()->route('leaves.index')->with('message', 'Cuti berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Leave $leave)
    {
        $employees = Employee::get()->pluck('name', 'id');
        $leave = DB::table('leaves')->where('id', $id)->first();

        return view('leaves.edit', compact('leave', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeaveRequest  $request
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeaveRequest $request, Leave $leaf)
    {
        $leaf->update($request->all());

        return redirect()->route('leaves.index')->with('message', 'Cuti berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Leave $leave)
    {
        return DB::table('leaves')->delete($id);
    }
}
