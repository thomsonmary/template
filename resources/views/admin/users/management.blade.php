@extends('admin.users.index')
@section('konten_management')
          <div id="right-panel" class="right-panel">

              <div class="breadcrumbs">
                  <div class="col-sm-4">
                      <div class="page-header float-left">
                          <div class="page-title">
                              <h1>Users Management</h1>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-8">
                      <div class="page-header float-right">
                          <div class="page-title">
                              <ol class="breadcrumb text-right">
                                  <li><a href="{{ route('admin.users.management') }}">Admin</a></li>
                                  <li><a href="{{ route('admin.users.management') }}">Users</a></li>
                                  <li class="active">Management</li>
                              </ol>
                          </div>
                      </div>
                  </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Users Management</strong>
                    </div>
                    <div class="card-body">
                      @if (session('eror'))  <!-- UNTUK REDIRECT KE HALAMAN AWAL /SISWA    -->
                        <div class="alert alert-danger" role="alert">
                          <h4 class="alert-heading">Danger !</h4>
                          <p>{{session('eror')}} </p>
                          <hr>
                          <p class="mb-0">Forbiden Acces !!!</p>
                        </div>
                      @endif
                      @if (session('sukses'))  <!-- UNTUK REDIRECT KE HALAMAN AWAL /SISWA    -->
                        <div class="alert alert-success" role="alert">
                          <h4 class="alert-heading">Success !</h4>
                          <p>{{session('sukses')}} </p>
                          <hr>
                          <p class="mb-0">Congratulation !!!</p>
                        </div>
                      @endif
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($users as $user)
                                <tr>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->email }}</td>
                                  <td><b>{{ implode(', ', $user->roles()->get()->pluck('role')->toArray()) }}</b></td>
                                  <td>
                                  <a href="{{ route('admin.users.edit', $user->id) }}">
                                    <button type="button" class="btn btn-sm btn-primary float-left">Edit</button></a>
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="post" class="float-left">
                                         @csrf
                                         {{ method_field('DELETE') }}
                                           <button type="submit" class="btn btn-sm btn-danger"
                                           onclick="return confirm('Yakin {{$user->name}} Dihapus? ')">Delete</button>
                                    </form>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

          </div>


@endsection
