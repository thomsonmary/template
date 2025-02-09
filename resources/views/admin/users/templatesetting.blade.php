@extends('admin.users.index')
@section('konten_template')
          <div id="right-panel" class="right-panel">

              <div class="breadcrumbs">
                  <div class="col-sm-4">
                      <div class="page-header float-left">
                          <div class="page-title">
                              <h1>Templates Management</h1>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-8">
                      <div class="page-header float-right">
                          <div class="page-title">
                              <ol class="breadcrumb text-right">
                                  <li><a href="{{ route('admin.users.template') }}">Admin</a></li>
                                  <li><a href="{{ route('admin.users.template') }}">Users</a></li>
                                  <li class="active">Templates</li>
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
                                    <th>No</th>
                                    <th>Template Terpasang</th>
                                    <th>Aktifkan Template</th>
                                    <th>Set</th>
                                    <th>Lihat Website</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                  $no = 1;  
                                @endphp
                              @foreach ($template as $t)
                                <tr>
                                  <td>{{$no ++}}</td>
                                  <td>{{$t->template}}</td>
                                  <td> 
                            <form action="{{ route('admin.users.update_template', $t->id) }}" method="post">
                              {{  csrf_field() }}                    
                                    @if ($t->template === 'Pertama')
                                    <input type="radio" name="template" value="Pertama" checked><button type="button" class="btn btn-sm btn-success">I</button>
                                    <input type="radio" name="template" value="Kedua"><button type="button" class="btn btn-sm btn-warning">II</button>
                                    <input type="radio" name="template" value="Ketiga"><button type="button" class="btn btn-sm btn-warning">III</button>
                                    <input type="radio" name="template" value="Keempat"><button type="button" class="btn btn-sm btn-warning">IV</button>
                                    <input type="radio" name="template" value="Kelima"><button type="button" class="btn btn-sm btn-warning">V</button>
                                    @elseif($t->template === 'Kedua')
                                    <input type="radio" name="template" value="Pertama"><button type="button" class="btn btn-sm btn-warning">I</button>
                                    <input type="radio" name="template" value="Kedua" checked><button type="button" class="btn btn-sm btn-success">II</button>
                                    <input type="radio" name="template" value="Ketiga"><button type="button" class="btn btn-sm btn-warning">III</button>
                                    <input type="radio" name="template"  value="Keempat"><button type="button" class="btn btn-sm btn-warning">IV</button>
                                    <input type="radio" name="template" value="Kelima"><button type="button" class="btn btn-sm btn-warning">V</button>
                                    <input type="radio" name="template" value="Kelima"><button type="button" class="btn btn-sm btn-warning">V</button>
                                    @elseif($t->template === 'Ketiga')
                                    <input type="radio" name="template" value="Pertama"><button type="button" class="btn btn-sm btn-warning">I</button>
                                    <input type="radio" name="template" value="Kedua"><button type="button" class="btn btn-sm btn-warning">II</button>
                                    <input type="radio" name="template" value="Ketiga" checked><button type="button" class="btn btn-sm btn-success">III</button>
                                    <input type="radio" name="template"  value="Keempat"><button type="button" class="btn btn-sm btn-warning">IV</button>
                                    <input type="radio" name="template" value="Kelima"><button type="button" class="btn btn-sm btn-warning">V</button>
                                    @elseif($t->template === 'Keempat')
                                    <input type="radio" name="template" value="Pertama"><button type="button" class="btn btn-sm btn-warning">I</button>
                                    <input type="radio" name="template" value="Kedua"><button type="button" class="btn btn-sm btn-warning">II</button>
                                    <input type="radio" name="template" value="Ketiga"><button type="button" class="btn btn-sm btn-warning">III</button>
                                    <input type="radio" name="template"  value="Keempat" checked><button type="button" class="btn btn-sm btn-success">IV</button>
                                    <input type="radio" name="template" value="Kelima"><button type="button" class="btn btn-sm btn-warning">V</button>
                                    @elseif($t->template === 'Kelima')
                                    <input type="radio" name="template" value="Pertama"><button type="button" class="btn btn-sm btn-warning">I</button>
                                    <input type="radio" name="template" value="Kedua"><button type="button" class="btn btn-sm btn-warning">II</button>
                                    <input type="radio" name="template" value="Ketiga"><button type="button" class="btn btn-sm btn-warning">III</button>
                                    <input type="radio" name="template"  value="Keempat"><button type="button" class="btn btn-sm btn-warning">IV</button>
                                    <input type="radio" name="template" value="Kelima" checked><button type="button" class="btn btn-sm btn-success">V</button>
                                    @else
                                        <button type="button" class="btn btn-sm btn-danger">Template Salah!</button>
                                    @endif
                                  </td>
                                  <td>
                                    <button type="submit" class="btn btn-sm btn-primary">Set</button></a>
                                  </td>
                                </form>
                                <td>
                                    <a href="/" target="_blank"><button type="button" class="btn btn-sm btn-primary">Tampilkan</button></a>
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
