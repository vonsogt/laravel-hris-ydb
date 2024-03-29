<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Institution;
use App\Models\Position;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function root()
    {
        $data['employeesCount'] = Employee::count();
        $data['institutionsCount'] = Institution::count();
        $data['positionsCount'] = Position::count();
        $data['newEmployeesCount'] = Employee::whereYear('join_date', now()->year)
            ->whereMonth('join_date', now()->month)
            ->count();
        $data['chartData'] = '';
        $data['chartCategories'] = '';

        $headcountEmployeeChartData = Employee::selectRaw('YEAR(join_date) as year, count(*) as total')
            ->groupBy('year')
            ->latest('year')
            ->take(5)
            ->get();

        $count = count(array_reverse($headcountEmployeeChartData->toArray())) - 1;
        foreach (array_reverse($headcountEmployeeChartData->toArray()) as $key => $val) {
            if ($key == $count) {
                $data['chartData'] .= $val['total'];
                $data['chartCategories'] .= $val['year'];
            } else {
                $data['chartData'] .= $val['total'] . ',';
                $data['chartCategories'] .= $val['year'] . ',';
            }
        }

        $dataChartCategories = explode(',', $data['chartCategories']);
        $maxYear = count($dataChartCategories) <= 4 ? count($dataChartCategories) : 4;
        $data['headCountEmployeeTitle'] = $data['chartCategories'] != ''
            ? (count($dataChartCategories) > 1
                ? ($dataChartCategories[0] . ' - ' . $dataChartCategories[count($dataChartCategories) - 1])
                : $dataChartCategories[0])
            : now()->year;

        return view('index', compact('data'));
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function editProfile()
    {
        $user = auth()->user();

        return view('users.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);

        // Check if authenticated user edit self
        if ($id != auth()->user()->id) {
            return abort(404);
        }

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $user->avatar =  $avatarName;
        }

        $user->update();
        if ($user) {
            Session::flash('message', 'Detail Pengguna Berhasil Diperbarui!');
            Session::flash('alert-class', 'alert-success');
            // return response()->json([
            //     'isSuccess' => true,
            //     'Message' => "User Details Updated successfully!"
            // ], 200); // Status code here
            return redirect()->back();
        } else {
            Session::flash('message', 'Ada yang salah!');
            Session::flash('alert-class', 'alert-danger');
            // return response()->json([
            //     'isSuccess' => true,
            //     'Message' => "Something went wrong!"
            // ], 200); // Status code here
            return redirect()->back();
        }
    }

    public function updatePassword(Request $request, $id)
    {
        // $validator = $request->validate([
        //     'current_password' => ['required', 'string'],
        //     'password' => ['required', 'string', 'min:6', 'confirmed'],
        // ]);

        $validator = Validator::make($request->all(), [
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if ($validator->fails()) {
            $error = $validator->errors()->first();
            Session::flash('type', 'password');
            Session::flash('message', $error);
            Session::flash('alert-class', 'alert-success');
            // return response()->json([
            //     'isSuccess' => false,
            //     'Message' => "Your Current password does not matches with the password you provided. Please try again."
            // ], 200); // Status code
            return redirect()->back();
        }

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            Session::flash('message', 'Kata sandi Anda saat ini tidak cocok dengan kata sandi yang Anda berikan. Silakan coba lagi.');
            Session::flash('alert-class', 'alert-success');
            // return response()->json([
            //     'isSuccess' => false,
            //     'Message' => "Your Current password does not matches with the password you provided. Please try again."
            // ], 200); // Status code
            return redirect()->back();
        } else {

            // Check if authenticated user edit self
            if ($id != auth()->user()->id) {
                return abort(404);
            }

            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Kata sandi berhasil diperbarui!');
                Session::flash('alert-class', 'alert-success');
                // return response()->json([
                //     'isSuccess' => true,
                //     'Message' => "Password updated successfully!"
                // ], 200); // Status code here
            } else {
                Session::flash('message', 'Ada yang salah!');
                Session::flash('alert-class', 'alert-danger');
                // return response()->json([
                //     'isSuccess' => true,
                //     'Message' => "Something went wrong!"
                // ], 200); // Status code here
            }
        }
        return redirect()->back();
    }
}
