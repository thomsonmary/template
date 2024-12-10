<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;  // ini yg benar untuk Gate

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\User  $user
     * @return \Illuminate\Http\Response
     */

     public function edit($user)
     {
         // dd($user);
         $users = User::where('id', $user);
         $dapatuser = User::with(['roles'])->find($user);
 
         
         return view('HalamanDashboard.ManagementUser', compact('users', 'dapatuser'));
 
     }  
 
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        //  dd($request);
        $user->roles()->sync($request->roles);
        // return redirect()->route('admin.users.management')->with('sukses', 'Data telah berhasil di update');
      }

      public function destroy(User $user)
      {
          // dd($user);
      if (Gate::denies('Hanya_Admin_Delete')) {
          return redirect(route('dashboard'))->with('eror', 'Yours role not admin, you can not delete');
      }
       //destroy ini untuk meremove role nya beserta usernya sekalian pada tabel dosens dan mahasiswas.
       $user->roles()->detach();
       $user->delete();
       return redirect()->route('dashboard')->with('sukses', 'Data telah berhasil di delete');
  
      }   
  }
