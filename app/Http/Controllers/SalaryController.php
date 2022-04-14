<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Http\Requests\StoreSalaryRequest;
use App\Http\Requests\UpdateSalaryRequest;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Barryvdh\DomPDF\Facade\Pdf;

class SalaryController extends Controller
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

            $data = Salary::select('*')->with(['employee'])->latest('id');

            if (auth()->getDefaultDriver() == 'api') {
                $data = $data->where('employee_id', auth()->user()->id);
            }

            return DataTables::of($data->get())
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
                ->addColumn('date', function ($row) {
                    if (auth()->getDefaultDriver() == 'api')
                        return $row->date;
                    return '<a class="fw-semibold" href="' . route('salaries.show', $row->id) . '">' . $row->date . '</a>';
                })
                ->addColumn('employee_name', function (Salary $salary) {
                    return $salary->employee->name;
                })
                ->addColumn('net_salary', function (Salary $salary) {
                    return 'Rp' . number_format($salary->getNetSalary(), '0', '.', ',');
                })
                ->addColumn('salary_received', function (Salary $salary) {
                    return 'Rp' . number_format($salary->getSalaryReceived(), '0', '.', ',');
                })
                ->addColumn('total_allowance', function (Salary $salary) {
                    return 'Rp' . number_format($salary->getTotalAllowance(), '0', '.', ',');
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

                    if (auth()->getDefaultDriver() == 'api') {
                        $btn = '
                            <div class="d-flex gap-2">
                                <div class="edit">
                                    <a href="' . route('employee.salaries.show', $row->id) . '" class="btn btn-sm btn-primary show-item-btn">Detail</a>
                                </div>
                                <div class="remove">
                                    <a href="' . route('employee.salaries.download_pdf', $row->id) . '" target="_blank" class="btn btn-sm btn-success remove-item-btn">Unduh</a>
                                </div>
                            </div>
                        ';
                    }

                    return $btn;
                })
                ->rawColumns(['action', 'date'])
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
        if (auth()->getDefaultDriver() == 'api') {
            if ($salary->employee->id != auth()->user()->id) {
                return abort(404);
            }
        }

        return view('salaries.show', compact('salary'));
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
        $salary->update($request->all());

        return redirect()->route('salaries.index')->with('message', 'Slip gaji berhasil diubah.');
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

    public function downloadPdf(Salary $salary)
    {
        if (auth()->getDefaultDriver() == 'api') {
            if ($salary->employee->id != auth()->user()->id) {
                return response()->json(['success' => false, 'message' => 'Unauthorized']);
            }
        }

        // $pdf = PDF::loadView('salaries.show', compact('salary'));
        $pdf = PDF::loadView('salaries.download-pdf', compact('salary'))->setPaper('a4', 'landscape');
        return $pdf->download('invoice.pdf');

        return view('salaries.show', compact('salary'));
    }

    public function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = $this->penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai / 10) . " puluh" . $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai / 100) . " ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai / 1000) . " ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai / 1000000) . " juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai / 1000000000) . " milyar" . $this->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai / 1000000000000) . " trilyun" . $this->penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    }

    public function terbilang($nilai)
    {
        if ($nilai < 0) {
            $hasil = "minus " . trim($this->penyebut($nilai));
        } else {
            $hasil = trim($this->penyebut($nilai));
        }
        return $hasil;
    }
}
