<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Relation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;  // ini yg benar untuk Gate
use App\Models\User;
use App\Models\Role;
use App\Models\Rps;
use App\Models\Semester;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Province;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if (Gate::allows('Hanya_Untuk_Administrator')) {

        $users =  User::all();
        $relasi = User::with('roles')->get();
        $cariuser = User::with(['roles'])->find(Auth::id());

        $provinces  = Province::all();

        // Tampilan untuk tabel 4 Menampilkan semua data tanpa kecuali:
        $relation = Rps::with(['relasitabeldosen', 'relasitabelkaprodi', 'relasitabelsemester', 
        'relasitabelsap', 'relasitabelbahanajar', 'relasitabeltime', 'relasitabelmatakuliah', 
        'relasitabeltemplaterps', 'relasitabeltemplatesap',
                    ])->get(); 
            //Tampilan untuk tabel 5 Menampilkan data UNTUK SEMESTER AKTIF 'Y' dan Tahun Aktif 'Y'
        $datawhere = Rps::with(['relasitabeldosen', 'relasitabelkaprodi', 'relasitabelsemester', 
        'relasitabelsap', 'relasitabelbahanajar', 'relasitabeltime', 'relasitabelmatakuliah', 
        'relasitabeltemplaterps', 'relasitabeltemplatesap',
                    ])->whereHas('relasitabeltime', function($q) { 
                        $q->where('times.aktifkan_tahun', '=', 'Y');
                    })->WhereHas('relasitabelsemester', function ($qu) {
                        $qu->where('semesters.aktifkan_semester', '=', 'Y');
                    })->get(); 
    
       return view('HalamanDashboard.index', compact(
            'users', 
            'relasi', 
            'cariuser', 
            'relation',
            'datawhere',
            'provinces',
        ));

        }else {
           
            return redirect()->route('erorpage')->with('pesan', 'Your are not administrator');
        }
    }


    public function relasi()
    {
        $relasi = Relation::all();
      
      
        return view('HalamanDashboardRPS.rps', compact('relasi', ));

    }


}
