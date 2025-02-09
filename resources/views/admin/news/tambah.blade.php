@extends('admin.users.index')
@section('konten_tambahNews')
 <!-- Right Panel -->
<div id="right-panel" class="right-panel">
           <div class="breadcrumbs">
               <div class="col-sm-4">
                   <div class="page-header float-left">
                       <div class="page-title">
                           <h1>Tambah Berita</b></h1>
                       </div>
                   </div>
               </div>
               <div class="col-sm-8">
                   <div class="page-header float-right">
                       <div class="page-title">
                           <ol class="breadcrumb text-right">
                               <li><a href="{{ route('admin.news.berita') }}">Admin</a></li>
                               <li><a href="{{ route('admin.news.create') }}">News</a></li>
                               <li class="active">Tambah Berita</li>
                           </ol>
                       </div>
                   </div>
               </div>
           </div>

     <div class="content mt-3">
         <div class="animated fadeIn">

             <div class="row">
                 <div class="col-xs-7 col-sm-7">
                     <div class="card">
                         <div class="card-header">
                             <strong>Judul Berita</strong> <small>Bahasa Indonesia</small>
                         </div>
                            <form action="{{ route('admin.news.tambah') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                               <div class="card-body card-block">
                                      <div class="form-group">
                                         <label class=" form-control-label">Judul Berita Ina</label>
                                         <div class="input-group">
                                             <div class="input-group-addon"><i class="fa fa-pencil-square"></i></div>
                                             <input type="text" name="judul_berita_ina" id="judul_berita_ina" class="form-control
                                             {{ $errors->has('judul_berita_ina')? 'is-invalid' : '' }}"
                                             placeholder="Silahkan Masukkan judul_berita_ina" value="{{ old('judul_berita_ina') }}"
                                             style="background-color: lightpink;" required  autofocus>
                                               @if ($errors->has('judul_berita_ina'))
                                                 <div class="invalid-feedback">
                                                     {{ $errors->first('judul_berita_ina') }}
                                                 </div>
                                               @endif
                                         </div>
                                         <small class="form-text text-muted">Bahasa Indonesia</small>
                                     </div>
                                     {{-- <div class="form-group">
                                       <label class=" form-control-label">Judul Berita Eng</label>
                                       <div class="input-group">
                                           <div class="input-group-addon"><i class="fa fa-pencil-square"></i></div>
                                           <input type="text" name="judul_berita_eng" id="judul_berita_eng" class="form-control
                                           {{ $errors->has('judul_berita_eng')? 'is-invalid' : '' }}"
                                           placeholder="Silahkan Masukkan judul_berita_eng" value="{{ old('judul_berita_eng') }}"
                                           style="background-color: lightpink;" required  autofocus>
                                             @if ($errors->has('judul_berita_eng'))
                                               <div class="invalid-feedback">
                                                   {{ $errors->first('judul_berita_eng') }}
                                               </div>
                                             @endif


                                       </div>
                                           <small class="form-text text-muted">English</small>
                                     </div> --}}
                                     <div class="col col-md-4">
                                     <div class="form-group">
                                     <label class=" form-control-label">Headline ?</label>
                                     <div class="input-group">
                                      <div class="input-group-addon"><i class="fa fa-bullhorn"></i></div>&nbsp&nbsp&nbsp&nbsp
                                       <div class="form-check">
                                                <div class="radio">
                                                 <label for="radio1" class="form-check-label ">
                                                     <input type="radio" id="radio1" name="headline" value="Y" class="form-check-input" required="required">Yes
                                                 </label>
                                                </div>
                                                <div class="radio">
                                                 <label for="radio2" class="form-check-label ">
                                                   <input type="radio" id="radio2" name="headline" value="N" class="form-check-input" required="required">No
                                                 </label>
                                                </div>
                                        </div>
                                     </div>
                                   </div>
                                 </div>

                                    <div class="col col-md-4">
                                    <div class="form-group">
                                    <label class=" form-control-label">Trending ?</label>
                                     <div class="input-group">
                                      <div class="input-group-addon"><i class="fa fa-bullhorn"></i></div>&nbsp&nbsp&nbsp&nbsp
                                       <div class="form-check">
                                                <div class="radio">
                                                 <label for="radio1" class="form-check-label ">
                                                     <input type="radio" id="radio1" name="trending" value="Y" class="form-check-input" required="required">Yes
                                                 </label>
                                                </div>
                                                <div class="radio">
                                                 <label for="radio2" class="form-check-label ">
                                                   <input type="radio" id="radio2" name="trending" value="N" class="form-check-input" required="required">No
                                                 </label>
                                                </div>
                                        </div>
                                     </div>
                                   </div>
                                 </div>

                                 <div class="col col-md-6">
                                   <div class="form-group">
                                     <label class=" form-control-label">Aktif ?</label>
                                     <div class="input-group">
                                      <div class="input-group-addon"><i class="fa fa-cogs"></i></div>&nbsp&nbsp&nbsp&nbsp
                                         <div class="form-check">
                                                <div class="radio">
                                                 <label for="radio3" class="form-check-label ">
                                                     <input type="radio" id="radio3" name="aktif" value="Y" class="form-check-input" required="required">Yes
                                                 </label>
                                                </div>
                                                <div class="radio">
                                                 <label for="radio4" class="form-check-label ">
                                                     <input type="radio" id="radio4" name="aktif" value="N" class="form-check-input" required="required">No
                                                 </label>
                                                </div>
                                              </div>
                                           </div>
                                         </div>
                                      </div>

                               </div>
                      </div>
                                 </div>
                                 <div class="col-xs-5 col-sm-5">
                                     <div class="card">
                                         <div class="card-header">
                                             <strong class="card-title">Kategori Berita</strong>
                                         </div>
                                         <div class="card-body">
                                           <select id="kategori" name="nama_kategori" class="standardSelect" tabindex="1" required>
                                             @foreach ($categories as $categorie)
                                                 <option value="{{$categorie->id}}" style="background-color: lightpink;" selected > {{ $categorie->nama_kategori }} </option>
                                             @endforeach
                                           </select>
                                         </div>
                                     </div>
                                     <div class="card">
                                         <div class="card-header" >
                                             <strong class="card-title">Tag Berita</strong>

                                              <div class="form-check" style=" background-color: lightpink; height: 195px; overflow-y: auto; ">
                                                  <div class="checkbox">
                                                    @foreach ($tags as $tag)
                                                        <input type="checkbox"  name="tag[]" value="{{ $tag->nama_tag  }}" >
                                                        <label><b>{{ $tag->nama_tag }} </b></label>
                                                    @endforeach
                                                    <label><b><font style="color:blue"> </font></b></label>
                                                  </div>
                                              </div>


                                         </div>
                                        </div>
                                 </div>
             </div>
                               <div class="col-xs-12 col-sm-12">
                                       <div class="card">
                                           <div class="card-header">
                                               <strong>Isi Berita Ina :: </strong> <small> Bahasa Indonesia </small>
                                           </div>
                                           <div class="card-body card-block">
                                               <div class="form-group" style=" background-color: lightyellow;">
                                                   <label class=" form-control-label">Tulis Berita</label>
                                                   <div class="input-group" >
                                                       <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                       <textarea id="isiberitaina" name="isi_berita_ina"  rows="8" cols="100" required autofocus></textarea>
                                                   </div>
                                                   <small class="form-text text-muted" ></small>
                                               </div>
                                           </div>
                                       </div>
                               </div>

                                 {{-- <div class="col-xs-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Isi Berita Eng :: </strong> <small> English </small>
                                            </div>
                                            <div class="card-body card-block">
                                                <div class="form-group" style=" background-color: lightyellow;">
                                                    <label class=" form-control-label">Tulis Berita</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        <textarea id="isiberitaeng" name="isi_berita_eng"  rows="8" cols="100" required autofocus></textarea>
                                                    </div>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                        </div>
                                 </div> --}}

                                <div class="col-xs-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Atribut Berita::</strong> <small>Kategori, hari, tanggal, dsb</small>
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="form-group">
                                                <label class=" form-control-label">Tanggal Berita</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        <input id="datepickers" name="tanggal" class="form-control" style=" background-color: lightgreen;">
                                                        <select id="format" style=" background-color: lightblue;">
                                                        <option value="mm/dd/yy">Default - mm/dd/yy</option>
                                                        <option value="d M, y">Short - d M, y</option>
                                                        <option value="d MM, y">Medium - d MM, y</option>
                                                        <option value="DD, d MM, yy">Full - DD, d MM, yy</option>
                                                    </select>
                                                </div>
                                            </div>
                                                <small class="form-text text-muted">ex. silahkan pilih format tanggal</small>
                                            <div class="form-group">
                                                <label class=" form-control-label">Upload Gambar Berita</label>
                                                <div class="input-group">
                                                <div class="col col-md-6">
                                                    <label for="file-multiple-input" class=" form-control-label">ke : <a href="https://imgbb.com/"> https://imgbb.com/ </a> </label>
                                                </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="file" id="file-input" name="gambar_berita" class="form-control-file" hidden="hidden"></div>
                                                </div>
                                                    <small class="form-text text-muted">Setelah upload gambar terlihat di "Gambar Berita Terpasang"</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="col col-md-12">
                                                <label for="file-multiple-input" class=" form-control-label">
                                                    <strong>Waktu Berita Terpasang</strong> <small></a></small>
                                                </label>
                                        </div>
                                        <div class="col-1 col-md-12">
                                            <input type="text" name="jam" 
                                            value="@php date_default_timezone_set('Asia/Jakarta'); $jam=date("H:i:s"); echo $jam;
                                            @endphp" class="form-control" style=" background-color: lightgreen;">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="col col-md-12">
                                                <label for="file-multiple-input" class=" form-control-label"><strong>Url Video Berita Terpasang</strong> <small>Upload Video ke : <a href="https://www.youtube.com/" target="_blank">  https://www.youtube.com/ </a>Dapatkan Link pada: Bagikan -> Sematkan -> Ambil Link Iframe, pada Youtube</small></label>
                                        </div>
                                        <div class="col-1 col-md-12">
                                            <input type="text" name="video" class="form-control-file" style=" background-color: lightgreen;">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Batal</strong>
                                        </div>
                                        <div class="card-body">
                                            <a href="{{ route('admin.news.berita') }}"><button type="button" class="btn btn-outline-warning btn-lg btn-block">B A T A L</button></a>
                                        </div>
                                    </div><!-- /# card -->

                                </div>
                                <div class="col-xs-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="form-group">
                                        <div class="card-header">
                                            <strong>Gambar Berita Terpasang </strong> <small>silahkan klik untuk memperbesar</small>
                                        </div>
                                        <div class="card-body card-block align-self-center">
                                            <div class="form-group">
                                                <img style="width:190px; height:150px;" alt="" src="{{Auth::user()->getAvatar()}}">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                    <div class="col col-md-12">
                                            <label for="file-multiple-input" class=" form-control-label">
                                                <strong>Url Gambar Berita</strong> <small>Upload Gambar ke : 
                                                    {{-- <a href="https://imgbb.com/" target="_blank">  https://imgbb.com/ </a></small> --}}
                                                    {{-- <input type="file" name="gambar"> --}}
                                            </label>
                                    </div>
                                    <div class="col-1 col-md-12">
                                        <input type="file" name="gambar_berita" class="form-control-file" style=" background-color: lightgreen;" height="25px">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                    <div class="col-1 col-md-12">
                                        <iframe width="200" height="95" 
                                        src="" frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                        </iframe>        
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Simpan</strong>
                                    </div>
                                    <div class="card-body">
                                    <input type="text" name="user_id" value="{{ Auth::user()->id  }}" hidden>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">S I M P A N</button>
                                    </div>
                                </div><!-- /# card -->
                        </form>





                     </div>



         </div><!-- .animated -->
     </div><!-- .content -->

</div><!-- /#right-panel -->

   <!-- Right Panel -->
@endsection
