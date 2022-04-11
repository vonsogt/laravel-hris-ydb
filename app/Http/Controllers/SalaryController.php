<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Http\Requests\StoreSalaryRequest;
use App\Http\Requests\UpdateSalaryRequest;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $filterYearRange = [
            2018    => '2018',
            2019    => '2019',
            2020    => '2020',
            2021    => '2021',
            2022    => '2022',
        ];

        $getSalaryYears = Salary::selectRaw('YEAR(date) as year, count(*) as total')
            ->groupBy('year')
            ->latest('year')
            ->get()
            ->pluck('year');

        if (!$getSalaryYears->isEmpty()) {
            $filterYearRange = [];
            foreach ($getSalaryYears as $year) {
                $filterYearRange[$year] = $year;
            }
        }

        if ($request->ajax()) {

            $data = Salary::select('*')->with(['employee'])->latest('id')->get();

            return DataTables::of($data)
                ->filter(function ($instance) use ($request) {
                    if (($month = $request->bulan) != null) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($month) {
                            $carbonMonth = [];
                            for ($m = 1; $m <= 12; $m++) {
                                $carbonMonth[$m] = Carbon::make('2022-' . $m . '-01')->shortMonthName;
                            }

                            return \Str::contains($row['date'], $carbonMonth[$month]) ? true : false;
                        });
                    }

                    if (($year = $request->tahun) != null) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($year) {
                            return \Str::contains($row['date'], $year) ? true : false;
                        });
                    }
                })
                ->addColumn('employee_name', function (Salary $salary) {
                    return $salary->employee->name;
                })
                ->addColumn('net_salary', function (Salary $salary) {
                    return $salary->getNetSalary();
                })
                ->addColumn('salary_received', function (Salary $salary) {
                    return $salary->getSalaryReceived();
                })
                ->addColumn('total_allowance', function (Salary $salary) {
                    return $salary->getTotalAllowance();
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                        <div class="d-flex gap-2">
                            <div class="edit">
                                <a href="' . route('salaries.edit', $row->id) . '" class="btn btn-sm btn-success edit-item-btn">Ubah</a>
                            </div>
                            <div class="remove">
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger remove-item-btn" onclick="deleteEntry(this)" data-route="' . route("salaries.destroy", [$row->id]) . '">Hapus</a>
                            </div>
                        </div>
                    ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('salaries.index', compact('filterYearRange'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::get()->pluck('name', 'id');

        return view('salaries.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalaryRequest $request)
    {
        $request->merge(['date' => $request->year . '-' . $request->month . '-' . now()->day]);
        $salary = Salary::create($request->all());

        return redirect()->route('salaries.index')->with('message', 'Slip gaji berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(Salary $salary)
    {
        $employees = Employee::get()->pluck('name', 'id');

        return view('salaries.edit', compact('salary', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalaryRequest  $request
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalaryRequest $request, Salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salary $salary)
    {
        return $salary->delete();
    }
}
