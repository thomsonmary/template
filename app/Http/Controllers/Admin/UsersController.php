<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
use App\Models\Template;
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
        $users = User::all();
        //    return view ('admin.users.index')->with('users', $users);
        return view('admin.users.index', compact('users'));
    }
    public function management()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.users.management', compact('users', 'roles'));
    }

    public function profile()
    {
        return view('admin.users.profile');
    }

    public function template()
    {
        $users = User::all();
        $roles = Role::all();

        $template = Template::all();
        return view('admin.users.templatesetting', compact('template', 'users', 'roles'));
    }

    public function updateTemplate(Request $request, $id)
    {
        DB::Table('templates')
            ->where('id', $request->id)
            ->update(['template' => $request->template]);
        return redirect()->route('admin.users.template')->with('sukses', 'Template berita telah berhasil diseting');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Gate::denies('edit-users')) {
            return redirect(route('admin.users.management'))->with('eror', 'Yours role not admin, you can not edit');
        }
        //dd($user);
        $roles = Role::all();
        $users = User::all();
        return view('admin.users.edit')->with(['roles' => $roles, 'user' => $user, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        //  dd($request);
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.management')->with('sukses', 'Data telah berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Gate::denies('delete-users')) {
            return redirect(route('admin.users.management'))->with('eror', 'Yours role not admin, you can not delete');
        }
        //  dd($user);
        //destroy ini untuk meremove role nya beserta usernya sekalian.
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.management')->with('sukses', 'Data telah berhasil di delete');
    }

}
