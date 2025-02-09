@extends('admin.users.index')
@section('konten_editNews')
 <!-- Right Panel -->
<div id="right-panel" class="right-panel">
           <div class="breadcrumbs">
               <div class="col-sm-4">
                   <div class="page-header float-left">
                       <div class="page-title">
                           <h1>Edit Berita :: Penulis (<b>{{ $news->name }})</b></h1>
                       </div>
                   </div>
               </div>
               <div class="col-sm-8">
                   <div class="page-header float-right">
                       <div class="page-title">
                           <ol class="breadcrumb text-right">
                               <li><a href="{{ route('admin.news.berita') }}">Admin</a></li>
                               <li><a href="{{ route('admin.news.edit', $news) }}">News</a></li>
                               <li class="active">Edit Berita</li>
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
                             <strong>Judul Berita</strong> <small>Indonesian & English</small>
                         </div>
                            <form action="{{ route('admin.news.update', $news) }}" method="post">
                              @csrf
                              {{ method_field('PUT') }}
                               <div class="card-body card-block">
                                      <div class="form-group">
                                         <label class=" form-control-label">Judul Berita Ina</label>
                                         <div class="input-group">
                                             <div class="input-group-addon"><i class="fa fa-pencil-square"></i></div>

           <input id="judul_berita_ina" type="text" name="judul_berita_ina" class="form-control"  value="@foreach ($news->categories as $categorie) {{ $categorie->pivot->judul_berita_ina }} @endforeach" style="background-color: lightpink;" required  autofocus>
                                         </div>
                                         <small class="form-text text-muted">Bahasa Indonesia</small>
                                     </div>
                                     <div class="form-group">
                                       <label class=" form-control-label">Judul Berita Eng</label>
                                       <div class="input-group">
                                           <div class="input-group-addon"><i class="fa fa-pencil-square"></i></div>
           <input id="judul_berita_eng" type="text" class="form-control" name="judul_berita_eng" value="@foreach ($news->categories as $categorie) {{ $categorie->pivot->judul_berita_eng }}  @endforeach" style="background-color: lightpink;" required  autofocus>
                                       </div>
                                           <small class="form-text text-muted">English</small>
                                     </div>
                                     <div class="col col-md-4">
                                     <div class="form-group">
                                     <label class=" form-control-label">Headline ?</label>
                                     <div class="input-group">
                                      <div class="input-group-addon"><i class="fa fa-bullhorn"></i></div>&nbsp&nbsp&nbsp&nbsp
                                       <!--- dari controller harus pakai ::   public function edit($news)   --->
                                         <div class="form-check">
                                                <div class="radio">
                                                 <label for="radio1" class="form-check-label ">
                                                     <input type="radio" id="radio1" name="headline" value="Y" @foreach ($news->categories as $categorie) @if ($categorie->pivot->headline === 'Y' )  checked  @endif @endforeach class="form-check-input">Yes
                                                 </label>
                                                </div>
                                                <div class="radio">
                                                 <label for="radio2" class="form-check-label ">
                                                     <input type="radio" id="radio2" name="headline" value="N" @foreach ($news->categories as $categorie) @if ($categorie->pivot->headline === 'N' ) checked  @endif @endforeach class="form-check-input">No
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
                                                 <label for="radio1" class="form-check-label ">
                                                     <input type="radio" id="radio1" name="aktif" value="Y" @foreach ($news->categories as $categorie) @if ($categorie->pivot->aktif === 'Y' ) checked  @endif @endforeach class="form-check-input">Yes
                                                 </label>
                                                </div>
                                                <div class="radio">
                                                 <label for="radio2" class="form-check-label ">
                                                     <input type="radio" id="radio2" name="aktif" value="N" @foreach ($news->categories as $categorie) @if ($categorie->pivot->aktif === 'N' ) checked  @endif @endforeach class="form-check-input">No
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
                                           <select name="nama_kategori" class="standardSelect" tabindex="1" required>
                                               @foreach ($categories as $categorie)
                                                 @if ($news->id === $categorie->id)
                                                  <option value="{{$categorie->id}}" style="background-color: lightpink;" selected > {{ $categorie->nama_kategori }} </option>
                                                 @else
                                                 <option value="{{$categorie->id}}" style="background-color: lightpink;" > {{ $categorie->nama_kategori }} </option>
                                               @endif
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
                                                      <input type="checkbox"  name="tag[]" value="{{ $tag->nama_tag }}"  >
                                                              <label><b>{{ $tag->nama_tag }}</b></label>
                                                      @endforeach
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

                                                       <textarea id="isiberitaina" name="isi_berita_ina"  rows="8" cols="100"> @foreach ($news->categories as $categorie) {!! $categorie->pivot->isi_berita_ina !!} @endforeach</textarea>

                                                   </div>
                                                   <small class="form-text text-muted" ></small>
                                               </div>
                                           </div>
                                        </div>
                                    </div>

                              <div class="col-xs-12 col-sm-12">
                                  <div class="card">
                                      <div class="card-header">
                                          <strong>Isi Berita Eng :: </strong> <small> English </small>
                                      </div>
                                      <div class="card-body card-block">
                                          <div class="form-group" style=" background-color: lightyellow;">
                                              <label class=" form-control-label">Tulis Berita</label>
                                              <div class="input-group">
                                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                  <textarea id="isiberitaeng" name="isi_berita_eng"  rows="8" cols="100" > @foreach ($news->categories as $categorie) {!! $categorie->pivot->isi_berita_eng !!} @endforeach</textarea>
                                              </div>
                                              <small class="form-text text-muted"></small>
                                          </div>
                                      </div>
                                   </div>
                               </div>

                               <div class="col-xs-6 col-sm-6">
                                   <div class="card">
                                       <div class="card-header">
                                           <strong>Atribut Berita::</strong> <small>Kategori, hari, tanggal, dsb</small>
                                       </div>
                                       <div class="card-body card-block">
                                           <div class="form-group">
                                               <label class=" form-control-label">Tanggal Berita Terpasang</label>
                                               <div class="input-group">
                                                   <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                     <input id="datepicker" name="tanggal" class="form-control" value=" @foreach ($news->categories as $categorie) {{ $categorie->pivot->tanggal }} @endforeach " style=" background-color: lightgreen;">
                                                     <select  id="format" style=" background-color: lightblue;">
                                                     <option value="mm/dd/yy">Default - mm/dd/yy</option>
                                                     <option value="d M, y">Short - d M, y</option>
                                                     <option value="d MM, y">Medium - d MM, y</option>
                                                     <option value="DD, d MM, yy">Full - DD, d MM, yy</option>
                                                   </select>
                                               </div>
                                           </div>
                                               <small class="form-text text-muted">ex. tanggal berita bisa dirubah (opsional)</small>
                                           <div class="form-group">
                                               <label class=" form-control-label">Upload Gambar Berita</label>
                                               <div class="input-group">
                                                 <div class="col col-md-3">
                                                   <label for="file-multiple-input" class=" form-control-label">Pilih</label>
                                                 </div>
                                                   <div class="col-12 col-md-9"><input type="file" id="file-input" name="gambar_berita" class="form-control-file"></div>
                                               </div>
                                                   <small class="form-text text-muted">ex. Ukuran gambar max. 500 px </small>
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
                                         <strong>Gambar Berita Terpasang </strong> <small>silahkan klik untuk memperbesar</small>
                                     </div>
                                     <div class="card-body card-block align-self-center">
                                         <div class="form-group">
                                            <img style="width:190px; height:190px;" alt="" src="{{Auth::user()->getAvatar()}}">
                                         </div>
                                     </div>
                                 </div>
                              </div>
                              <div class="card">
                                   <div class="card-header">
                                       <strong>Update</strong>
                                   </div>
                                   <div class="card-body">
                                       <button type="submit" class="btn btn-primary btn-lg btn-block">U P D A T E</button>
                                   </div>
                              </div><!-- /# card -->
                        </form>





                     </div>



         </div><!-- .animated -->
     </div><!-- .content -->

</div><!-- /#right-panel -->

   <!-- Right Panel -->
@endsection
