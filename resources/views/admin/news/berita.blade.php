@extends('admin.users.index')
@section('konten_berita')

          <div id="right-panel" class="right-panel">

              <div class="breadcrumbs">
                  <div class="col-sm-4">
                      <div class="page-header float-left">
                          <div class="page-title">
                              <h1>Berita</h1>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-8">
                      <div class="page-header float-right">
                          <div class="page-title">
                              <ol class="breadcrumb text-right">
                                  <li><a href="{{ route('admin.news.berita') }}">Admin</a></li>
                                  <li><a href="{{ route('admin.news.create') }}">News</a></li>
                                  <li class="active">Berita</li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Berita :: <a href="{{ route('admin.news.create') }}">
                          <i class="fa fa-plus-square fa-lg" ></i></a></strong>
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
                      <table width="100%" id="bootstrap-data-table-export" class="table table-striped table-bordered">
                         <thead align="center">
                             <tr>
                                 <th width="3%">No</th>
                                 <th width="25%">Judul Berita</th>
                                 <th width="14%">Penulis</th>
                                 <th width="14%">Trending <br> (Trending News)</th>
                                 <th width="8%">Headline <br> (Featured News)</th>
                                 <th width="6%">Status</th>
                                 <th width="15%">Aksi</th>
                             </tr>
                         </thead>
                         <tbody>

                          @php
                           $no = 1;
                          @endphp
                           @foreach ($categoriesusers as $categorieuser)
                             <tr>
                               <td>{{ $no++ }}</td>
                               <td><a href="{{ route('admin.news.edit', $categorieuser->id )  }}">{{ $categorieuser->judul_berita_ina }} :: ({{ $categorieuser->tanggal }}) </a> </td>
                               <td><b>{{ $categorieuser->name }} </b></td>
                               <td align="center">
                                
                               <form action="{{ route('admin.news.trending', $categorieuser->id) }}" method="post">
                                 {{  csrf_field() }}
                                 @if ($categorieuser->trending=='Y')
                                     <input type="text" name="trending" value="N" hidden="hidden">
                                     <button type="submit" class="btn btn-sm btn-success">Yes</button>
                                 @else
                                     <input type="text" name="trending" value="Y" hidden="hidden">
                                     <button type="submit" class="btn btn-sm btn-warning">No</button>
                                 @endif
                               </form>

                               </td>
                               <td align="center">

                               <form action="{{ route('admin.news.headline', $categorieuser->id) }}" method="post">
                                 {{  csrf_field() }}
                                 @if ($categorieuser->headline=='Y')
                                     <input type="text" name="headline" value="N" hidden="hidden">
                                     <button type="submit" class="btn btn-sm btn-success">Yes</button>
                                 @else
                                     <input type="text" name="headline" value="Y" hidden="hidden">
                                     <button type="submit" class="btn btn-sm btn-warning">No</button>
                                 @endif
                               </form>
                               </td>
                               <td align="center">
                               <form action="{{ route('admin.news.aktif', $categorieuser->id) }}" method="post">
                                 {{  csrf_field() }}
                                 @if ($categorieuser->aktif=='Y')
                                     <input type="text" name="aktif" value="N" hidden="hidden">
                                     <button type="submit" class="btn btn-sm btn-success">Published</button>
                                 @else
                                     <input type="text" name="aktif" value="Y" hidden="hidden">
                                     <button type="submit" class="btn btn-sm btn-warning">Unpublish</button>
                                 @endif
                               </form>
                               </td>
                               <td align="center">
                               <a href="{{ route('admin.news.edit', $categorieuser->id ) }}"><button type="button" class="btn btn-sm btn-primary float-left">Edit</button></a>
                               <form action="{{ route('admin.news.destroy', $categorieuser->id) }}" method="post">
                                    @csrf
                                 {{ method_field('DELETE') }}
                                     <button type="submit" class="btn btn-sm btn-danger float-left" onclick="return confirm('Yakin {{   $categorieuser->judul_berita_ina }}  Dihapus? ')">Delete</button>
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
