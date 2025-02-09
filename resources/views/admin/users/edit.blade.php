@extends('admin.users.index')
@section('konten_editUsers')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">


          <div class="breadcrumbs">
              <div class="col-sm-4">
                  <div class="page-header float-left">
                      <div class="page-title">
                          <h1>Edit User :: <b>{{ $user->name }}</b></h1>
                      </div>
                  </div>
              </div>
              <div class="col-sm-8">
                  <div class="page-header float-right">
                      <div class="page-title">
                          <ol class="breadcrumb text-right">
                              <li><a href="{{ route('admin.users.management') }}">Admin</a></li>
                              <li><a href="{{ route('admin.users.edit', $user) }}">Users</a></li>
                              <li class="active">Edit User</li>
                          </ol>
                      </div>
                  </div>
              </div>
        </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> <strong class="card-title"><b>{{ $user->name }}</b></strong> </div>
                        <div class="card-body">
                            <form action="{{ route('admin.users.update', $user) }}" method="post">
                              <div class="form-group row">
                                  <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                                </div>
                              <div class="form-group row">
                                  <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                                  <div class="col-md-6">
                                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required  autofocus>

                                      @error('name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>
                              @csrf
                              {{ method_field('PUT') }}
                              <div class="form-group row">
                                <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                                <div class="col-md-6">
                                @foreach ($roles as $role)
                                  <div class="form-check">
                                    <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                    @if ($user->roles->pluck('id')->contains($role->id)) checked @endif >
                                      <label><b>{{ $role->role }}</b></label>
                                  </div>
                                @endforeach
                                </div>
                              </div>
                                  <button type="submit" class="btn btn-primary btn-sm"> Update </button>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
