
Edit Management 

<b>
    <span>
        {{ $users->first()->id }},  {{ $users->first()->name }}

    </span>



</b>

<table border="1">
    <tr>
        <td>
           <b> Nama </b>
        </td>
        <td>
           <b> Email </b>
        </td>
        <td>
           <b> Level </b>
        </td>
        <td>
            <b> Role id(Tabel role_user) </b>
         </td>
         <td>
            <b> User id(Tabel role_user) </b>
         </td>
         <td>
            <b> Role(Tabel Roles) </b>
         </td>
         <td>
            <b> Pivot (Tabel Role_user) </b>
         </td>
     </tr>
        <tr>
            <td>
                {{ $dapatuser->name }}
            </td>
            <td>
                {{ $dapatuser->email }}
            </td>
            <td>
                {{ $dapatuser->level }}
            </td>
            <td>
                {{-- {{ $dapatuser->roles->first()->role }} --}}

                {{ optional($dapatuser->roles->first())->role }}

            </td>
            <td>
                {{-- {{ $dapatuser->id }} --}}
                {{-- {{ $dapatuser->roles->first()->pivot->user_id }}  --}}
            </td>
            <td>
                {{-- {{ $dapatuser->roles->first()->id }} --}}
                {{-- {{ $dapatuser->roles->first()->pivot->role_id }}  --}}

            </td>
            <td>
                {{-- {{ $dapatuser->roles->first()->pivot->option }} --}}
              
                @foreach ($dapatuser->roles as $t)
                {{ $t->pivot->role_id }}    
                @endforeach

            </td>

        </tr>

</table>










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
          <a href="{{ route('ManagementUser.Edit', $user->id) }}">
            <button type="button" class="btn btn-sm btn-primary float-left">Edit</button></a>
            <form action="{{ route('ManagementUser.destroy', $user) }}" method="post" class="float-left">
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
