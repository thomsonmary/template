Anda Masukke Halaman Dashboard Admin

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Hello <b> {{ Auth::user()->name }} </b> Login dengan Level  <b> {{ (Auth::user()->level)}} </b> 
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
 --}}
                                   @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                                <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Welcome</a> &nbsp;&nbsp;

                                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> &nbsp;&nbsp;
                                                            <a class="text-sm text-gray-700 dark:text-gray-500 underline" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                            @else
                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </div>
                            </li>

                            <ul>
                                @can('Hanya_Admin_Edit')

                                    <li>
                                        <h3>
                                            Menu Admin 1
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu Admin 2
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu Dosen 1
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu Dosen 2
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu GKM 1
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu GKM 2
                                        </h3>
                                    </li>
                                @endcan
                                @can('Hanya_Dosen_Edit')
                                    <li>
                                        <h3>
                                            Menu Dosen 1
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu Dosen 2
                                        </h3>
                                    </li>
                                @endcan
                                @can('Hanya_Gkm_Edit')
                                    <li>
                                        <h3>
                                            Menu GKM 1
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu GKM 2
                                        </h3>
                                    </li>
                                @endcan
                                </ul>
                                <h1>1. Manajemen Administrator (Khusus Admin)</h1>
                                @if (Auth::user()->hasRole('admin'))
                                @can('Hanya_Admin_Edit')
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
                                            <td>Pivot Tes</td>
                                        </tr>
                                        @foreach ( $relasi as $tampilkan )
                                            <tr>
                                                <td>
                                                    {{ $tampilkan->name }}
                                                </td>
                                                <td>
                                                    {{ $tampilkan->email }}
                                                </td>
                                                <td>
                                                    {{ $tampilkan->level }}
                                                </td>
                                                <td>
                                                    {{-- {!! dd($tampilkan->roles)->pluck('pivot_option') !!} --}}
                                                    {{ implode(', ', $tampilkan->roles()->pluck('role_id')->toArray()) }}
                                                </td>
                                                <td>
                                                    {{ implode(', ', $tampilkan->roles()->pluck('user_id')->toArray()) }}
                                                    {{-- {{ $t->pivot->user_id }}     --}}
                                                </td>
                                                <td>
                                                    {{-- {{ $t->pivot->role_id }}     --}}
                                                    {{ implode(', ', $tampilkan->roles()->pluck('role_id')->toArray()) }}
                                                </td>
                                                <td>
                                                    {{ implode(', ', $tampilkan->roles()->pluck('role_id')->toArray()) }}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                 
                                    <h1>2. Edit Manajemen User</h1>
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
                                                <b> Role(Tabel role_user) </b>
                                            </td>
                                            <td>
                                                Aksi
                                            </td>
                                        </tr>
                                        @foreach ( $users as $user )
                                            <tr>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td>
                                                    {{ $user->level }}
                                                </td>
                                                <td>
                                                    {{ implode(', ', $user->roles()->get()->pluck('role')->toArray()) }}
                                                </td>
                                                <td>
                                                            <div class="form-button-action">

                                                                <a href="{{ route('ManagementUser.Edit', $user->id) }}"> EDIT
                                                                {{-- <button type="button" data-toggle="tooltip" title="Edit" 
                                                                class="btn btn-primary" data-original-title="Edit Task"  
                                                                
                                                                >
                                                                    <i class="fa fa-edit"></i>
                                                                </button> --}}
                                                                </a>
                                                                <form action="{{ route('ManagementUser.Destroy', $user->id) }}" method="POST" class="float-left">
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" data-toggle="tooltip" title="Remove"  onclick="return confirm('Yakin '{{$user->name}}' dg id '{{$user->id}}' Dihapus? ')"
                                                                           class="btn btn-danger" data-original-title="Remove"  >
                                                                           <i class="fa fa-times"></i>
                                                                    </button>
                                                                </form>	
                                                            </div>
                                                        </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                @endcan
                                @else
                                    {{ "Maaf Anda Bukan Admin, Tidak Bisa Ditampilkan !!!" }}    
                                @endif

                                @can('Hanya_Untuk_Administrator')
                                <h1>3. Tabel Profil Administrator YBS Login</h1>
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
                                                {{ $cariuser->name }}
                                            </td>
                                            <td>
                                                {{ $cariuser->email }}
                                            </td>
                                            <td>
                                                {{ $cariuser->level }}
                                            </td>
                                            <td>
                                                {{ $cariuser->roles->first()->role }}
                                            </td>
                                            <td>
                                                {{-- {{ $cariuser->id }} --}}
                                                {{ $cariuser->roles->first()->pivot->user_id }} 
                                            </td>
                                            <td>
                                                {{-- {{ $cariuser->roles->first()->id }} --}}
                                                {{ $cariuser->roles->first()->pivot->role_id }} 

                                            </td>
                                            <td>
                                                {{-- {{ $cariuser->roles->first()->pivot->option }} --}}
                                              
                                                @foreach ($cariuser->roles as $t)
                                                {{ $t->pivot->role_id }}    
                                                @endforeach

                                            </td>

                                        </tr>

                                </table>


                                <h1>4. Semua Dari Tabel Relations </h1>
                                <table border="1">
                                    <tr>
                                        <td>
                                           <b> Nama RPS </b>
                                        </td>
                                        <td>
                                           <b> Nama Dosen </b>
                                        </td>
                                        <td>
                                            <b> Nama Kaprodi </b>
                                         </td>
                                        <td>
                                            <b> Semester </b>
                                        </td>
                                          <td>
                                            <b> RPS_ID </b>
                                         </td>
                                         <td>
                                            <b> SAP_ID </b>
                                         </td>
                                         <td>
                                            <b> VALIDASI_GKM </b>
                                         </td>
                                         <td>
                                            <b> Nama SAP </b>
                                        </td>
                                        <td>
                                            <b> Judul Bahan Ajar </b>
                                        </td>
                                        <td>
                                            <b> Buku </b>
                                        </td>
                                        <td>
                                            <b> Jurnal </b>
                                        </td>
                                        <td>
                                            <b> Hari/Tgl </b>
                                        </td>
                                        <td>
                                            <b> Mata Kuliah </b>
                                        </td>
                                        <td>
                                            <b> Kode Kuliah </b>
                                        </td>
                                        <td>
                                            <b> Template RPS </b>
                                        </td>
                                        <td>
                                            <b> Template SAP </b>
                                        </td>
                                        <td>
                                            <b> Tahun Aktif </b>
                                        </td>
                                        <td>
                                            <b> Semester Aktif </b>
                                        </td>
                                 

                                        </tr>
                                        @foreach($relation as $lihat)
                                        <tr>
                                            <td>

                                                {{ $lihat->nama_rps }}     
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeldosen()->pluck('nama_dosen')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{-- {{ dd($lihat->relasitabelkaprodi()->pluck('nama_kaprodi')->toArray()) }} --}}
                                                {{ implode(', ', $lihat->relasitabelkaprodi()->pluck('nama_kaprodi')->toArray()) }}
                                                 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelsemester()->pluck('semester')->toArray()  )}} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeldosen()->pluck('rps_id')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeldosen()->pluck('sap_id')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeldosen()->pluck('validasi_gkm')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelsap()->pluck('nama_sap')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelbahanajar()->pluck('judul')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelbahanajar()->pluck('buku')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelbahanajar()->pluck('jurnal')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeltime()->pluck('haritglblnthn')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelmatakuliah()->pluck('nama_mk')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelmatakuliah()->pluck('kode_mk')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeltemplaterps()->pluck('nama_template_rps')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeltemplatesap()->pluck('nama_template_sap')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeltime()->pluck('aktifkan_tahun')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelsemester()->pluck('aktifkan_semester')->toArray()) }} 
                                            </td>

                                        </tr>

                                        @endforeach
                                        {{-- {{ $data->nama_rps }} --}}
                                </table>
                           
                           
                           
                                <h1>5. Relasi Pakai Where TAHUN == 'Y' dan SEMESTER AKTIF == 'Y'</h1>
                                <table border="1">
                                    <tr>
                                        <td>
                                           <b> Nama RPS </b>
                                        </td>
                                        <td>
                                           <b> Nama Dosen </b>
                                        </td>
                                        <td>
                                            <b> Nama Kaprodi </b>
                                         </td>
                                        <td>
                                            <b> Semester </b>
                                        </td>
                                          <td>
                                            <b> RPS_ID </b>
                                         </td>
                                         <td>
                                            <b> SAP_ID </b>
                                         </td>
                                         <td>
                                            <b> VALIDASI_GKM </b>
                                         </td>
                                         <td>
                                            <b> Nama SAP </b>
                                        </td>
                                        <td>
                                            <b> Judul Bahan Ajar </b>
                                        </td>
                                        <td>
                                            <b> Buku </b>
                                        </td>
                                        <td>
                                            <b> Jurnal </b>
                                        </td>
                                        <td>
                                            <b> Hari/Tgl </b>
                                        </td>
                                        <td>
                                            <b> Mata Kuliah </b>
                                        </td>
                                        <td>
                                            <b> Kode Kuliah </b>
                                        </td>
                                        <td>
                                            <b> Template RPS </b>
                                        </td>
                                        <td>
                                            <b> Template SAP </b>
                                        </td>
                                        <td>
                                            <b> Tahun Aktif </b>
                                        </td>
                                        <td>
                                            <b> Semester Aktif </b>
                                        </td>
                                 

                                        </tr>
                                        @foreach($datawhere as $lihat)
                                        <tr>
                                            <td>

                                                {{ $lihat->nama_rps }}     
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeldosen()->pluck('nama_dosen')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{-- {{ dd($lihat->relasitabelkaprodi()->pluck('nama_kaprodi')->toArray()) }} --}}
                                                {{ implode(', ', $lihat->relasitabelkaprodi()->pluck('nama_kaprodi')->toArray()) }}
                                                 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelsemester()->pluck('semester')->toArray()  )}} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeldosen()->pluck('rps_id')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeldosen()->pluck('sap_id')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeldosen()->pluck('validasi_gkm')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelsap()->pluck('nama_sap')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelbahanajar()->pluck('judul')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelbahanajar()->pluck('buku')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelbahanajar()->pluck('jurnal')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeltime()->pluck('haritglblnthn')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelmatakuliah()->pluck('nama_mk')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelmatakuliah()->pluck('kode_mk')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeltemplaterps()->pluck('nama_template_rps')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeltemplatesap()->pluck('nama_template_sap')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabeltime()->pluck('aktifkan_tahun')->toArray()) }} 
                                            </td>
                                            <td>
                                                {{ implode(', ', $lihat->relasitabelsemester()->pluck('aktifkan_semester')->toArray()) }} 
                                            </td>
                                        </tr>

                                        @endforeach
                                </table>
     @endcan


     <br>
        <!-- Dropdown untuk Provinsi -->
        <select id="province-dropdown">
            <option value="">Pilih Provinsi</option> <!-- Tambahkan opsi default -->
            @foreach ($provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name }}</option>
            @endforeach
        </select>
        <!-- Dropdown untuk Kota, dimulai dari kosong -->
        <select id="city-dropdown">
            <option value="">Pilih Kota</option> <!-- Tambahkan opsi default -->
        </select>
    <br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 {{-- <script>
        document.getElementById('province-dropdown').addEventListener('change', function () {
            var provinceId = this.value;
            fetch(`/get-cities/${provinceId}`)
                .then(response => response.json())
                .then(data => {
                    var cityDropdown = document.getElementById('city-dropdown');
                    cityDropdown.innerHTML = '';
                    data.forEach(function (city) {
                        var option = document.createElement('option');
                        option.value = city.id;
                        option.textContent = city.name;
                        cityDropdown.appendChild(option);
                    });
                });
        });
        </script> --}}



{{-- <script>
    document.getElementById('province-dropdown').addEventListener('change', function () {
        var provinceId = this.value;
        
        // Pastikan provinceId ada
        if (provinceId) {
            fetch(`/get-cities/${provinceId}`)  
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    var cityDropdown = document.getElementById('city-dropdown');
                    cityDropdown.innerHTML = ''; // Kosongkan dropdown kota
                    
                    // Periksa apakah data ada
                    if (data.length > 0) {
                        data.forEach(function (city) {
                            var option = document.createElement('option');
                            option.value = city.id;
                            option.textContent = city.name;
                            cityDropdown.appendChild(option);
                        });
                    } else {
                        var option = document.createElement('option');
                        option.textContent = 'No cities found';
                        cityDropdown.appendChild(option);
                    }
                })
                .catch(error => {
                    console.error('Error fetching cities:', error);
                });
        }
    });
</script> --}}
<script>
    document.getElementById('province-dropdown').addEventListener('change', function () {
        var provinceId = this.value;
        console.log('Province ID:', provinceId); // Tambahkan log untuk mengecek apakah nilai provinsi benar
        if (provinceId) {
            fetch(`/get-cities/${provinceId}`)
                .then(response => {
                    console.log('Response status:', response.status); // Log status dari respons
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Fetched cities:', data); // Log data kota yang diterima
                    var cityDropdown = document.getElementById('city-dropdown');
                    cityDropdown.innerHTML = ''; // Kosongkan dropdown kota
                    
                    // Tambahkan opsi default
                    var defaultOption = document.createElement('option');
                    defaultOption.value = '';
                    defaultOption.textContent = 'Pilih Kota';
                    cityDropdown.appendChild(defaultOption);
                    
                    if (data.length > 0) {
                        data.forEach(function (city) {
                            var option = document.createElement('option');
                            option.value = city.id;
                            option.textContent = city.name;
                            cityDropdown.appendChild(option);
                        });
                    } else {
                        var option = document.createElement('option');
                        option.textContent = 'No cities found';
                        cityDropdown.appendChild(option);
                    }
                })
                .catch(error => {
                    console.error('Error fetching cities:', error); // Log error
                });
        } else {
            console.log('No province selected'); // Jika tidak ada provinsi yang dipilih
        }
    });
</script>
