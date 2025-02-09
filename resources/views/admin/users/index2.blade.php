@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @if (session('eror'))  <!-- UNTUK REDIRECT KE HALAMAN AWAL /SISWA    -->
                <div class="alert alert-danger" role="alert">
                  <h4 class="alert-heading">Danger !</h4>
                  <p>{{session('eror')}} </p>
                  <hr>
                  <p class="mb-0">Forbiden Acces !!!</p>
                </div>
              @endif
              <div class="card-header">USERS</div>
                <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <th scope="row">{{$user->id}}</th>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email }}</td>
                          <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                          <td>
                          <a href="{{ route('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-sm btn-primary float-left">Edit</button></a>
                          <form action="{{ route('admin.users.destroy', $user) }}" method="post" class="float-left">
                            @csrf
                            {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-sm btn-warning">Delete</button>
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
</div>
@endsection
