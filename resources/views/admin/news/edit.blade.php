@extends('admin.users.index')
@section('konten_editNews')
 <!-- Right Panel -->
<div id="right-panel" class="right-panel">
           <div class="breadcrumbs">
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

               <div class="col-sm-4">
                   <div class="page-header float-left">
                       <div class="page-title">
                           <h1>Edit Berita :: Penulis (<b>{{ $categoriesuser->name }})</b></h1>
                         
                       </div>
                   </div>
               </div>
               <div class="col-sm-8">
                   <div class="page-header float-right">
                       <div class="page-title">
                           <ol class="breadcrumb text-right">
                               <li><a href="{{ route('admin.news.berita') }}">Admin</a></li>
                               <li><a href="{{ route('admin.news.edit', $categoriesuser->id) }}">News</a></li>
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
                            <form action="{{ route('admin.news.update', $categoriesuser->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              {{-- {{ method_field('PUT') }} --}}
                               <div class="card-body card-block">
                                      <div class="form-group">
                                         <label class=" form-control-label">Judul Berita Ina</label>
                                         <div class="input-group">
                                             <div class="input-group-addon"><i class="fa fa-pencil-square"></i></div>

                                      <input id="judul_berita_ina" type="text" name="judul_berita_ina" class="form-control"  value="{{ $categoriesuser->judul_berita_ina }} " style="background-color: lightpink;" required  autofocus>
                                         </div>
                                         <small class="form-text text-muted">Bahasa Indonesia</small>
                                     </div>

                                     <div class="col col-md-4">
                                     <div class="form-group">
                                     <label class=" form-control-label">Trending ?</label>
                                     <div class="input-group">
                                     <div class="input-group-addon"><i class="fa fa-bullhorn"></i></div>&nbsp&nbsp&nbsp&nbsp
                                       <!--- dari controller harus pakai ::   public function edit($news)   --->
                                     <div class="form-check">
                                                <div class="radio">
                                                 <label for="radio1" class="form-check-label ">
                                                     <input type="radio" id="radio1" name="trending" value="Y" @if ($categoriesuser->trending === 'Y' )  checked  @endif class="form-check-input">Yes
                                                 </label>
                                                </div>
                                                <div class="radio">
                                                 <label for="radio2" class="form-check-label ">
                                                     <input type="radio" id="radio2" name="trending" value="N" @if ($categoriesuser->trending === 'N' ) checked  @endif class="form-check-input">No
                                                 </label>
                                                </div>
                                     </div>
                                     </div>
                                     </div>
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
                                                     <input type="radio" id="radio1" name="headline" value="Y"  @if ($categoriesuser->headline === 'Y' )  checked  @endif  class="form-check-input">Yes
                                                 </label>
                                                </div>
                                                <div class="radio">
                                                 <label for="radio2" class="form-check-label ">
                                                     <input type="radio" id="radio2" name="headline" value="N"  @if ($categoriesuser->headline === 'N' ) checked  @endif  class="form-check-input">No
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
                                                     <input type="radio" id="radio1" name="aktif" value="Y"  @if ($categoriesuser->aktif === 'Y' ) checked  @endif  class="form-check-input">Yes
                                                 </label>
                                                </div>
                                                <div class="radio">
                                                 <label for="radio2" class="form-check-label ">
                                                     <input type="radio" id="radio2" name="aktif" value="N"  @if ($categoriesuser->aktif === 'N' ) checked  @endif  class="form-check-input">No
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
                                                 @if ($categoriesuser->id >= 1)
                                                   <option value="{{$categoriesuser->id}}" style="background-color: lightpink;" selected > {{ $categoriesuser->nama_kategori }} </option>
                                                 @endif
                                             
                                                @if ($categoriesuser->id > 0)
                                                    <option value="{{$kategori->id}}" style="background-color: lightpink;" > {{ $kategori->nama_kategori }} </option>
                                                @endif
                                             
                                           </select>
                                         </div>
                                     </div>
                                     <div class="card">
                                         <div class="card-header" >
                                             <strong class="card-title">Tag Berita</strong>

                                              <div class="form-check" style=" background-color: lightpink; height: 195px; overflow-y: auto; ">
                                                  <div class="checkbox">
                                                    <label><b><font style="color:blue">Tags saat ini : *</font></b></label><br>
                                                           <input type="checkbox"  name="tag[]" value="{{ $categoriesuser->tag }}" checked  >
                                                           <label><b>{!! $categoriesuser->tag !!}</b></label>
                                                      
                                                      <label><b><font style="color:blue"></font></b></label><br>
                                                      @foreach($tags as $tag)
                                                        <input type="checkbox"  name="tag[]" value="{{ $tag->nama_tag }}"  >
                                                        <label><b>{{ $tag->nama_tag }}</b></label>
                                                      @endforeach
                                                      <label><b><font style="color:blue"></font></b></label>

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

                                                       <textarea id="isiberitaina" name="isi_berita_ina"  rows="8" cols="100"> {!! $categoriesuser->isi_berita_ina !!} </textarea>

                                                   </div>
                                                   <small class="form-text text-muted" ></small>
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
                                                     <input id="datepicker" name="tanggal" class="form-control" value="{{ $categoriesuser->tanggal }}" style=" background-color: lightgreen;">
                                                     <select  id="format" style=" background-color: lightblue;">
                                                     <option value="mm/dd/yy">Default - mm/dd/yy</option>
                                                     <option value="d M, y">Short - d M, y</option>
                                                     <option value="d MM, y">Medium - d MM, y</option>
                                                     <option value="DD, d MM, yy">Full - DD, d MM, yy</option>
                                                   </select>
                                               </div>
                                           </div>
                                           <div class="form-group">
                                            <label class=" form-control-label">Waktu Berita Sekarang</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                                  <input name="jam" class="form-control" 
                                                  value="@php date_default_timezone_set('Asia/Jakarta'); $jam=date("H:i:s"); echo $jam;
                                                  @endphp" 
                                                  style=" background-color: lightgreen;">
                                            </div>
                                           </div>

                                               <small class="form-text text-muted">ex. tanggal berita bisa dirubah (opsional)</small>
                                           
                                       </div>
                                   </div>

                                   <!-- /# card -->

                               </div>
                               <div class="col-xs-1 col-sm-6">
                                 <div class="card">
                                     <div class="card-header">
                                         <strong>Gambar Berita Terpasang </strong> <small>silahkan klik untuk memperbesar</small>
                                     </div>
                                     <div class="card-body card-block align-self-center">
                                         <div class="form-group">
                                            <a href="{{ asset('uploads/berita/' . $categoriesuser->gambar_berita) }}" target="_blank">
                                             <img src=" {!! asset('uploads/berita/' . $categoriesuser->gambar_berita) !!} " border="0" width="200px" />
                                            </a>
                                        </div>
                                         
                                     </div>
                                     <input type="file" name="gambar_berita">
                                 </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="col col-md-12">
                                        <label for="file-multiple-input" class=" form-control-label"><strong>Gambar Berita</strong> 
                                            <small>Upload Gambar ke : Maks. 500 Kb
                                            @if ($categoriesuser->video !== null)
                                               {{"Status :: "}} <b> {{ "OK" }} </b>
                                            @else
                                               {{"Status ::"}} <b> {{ "Empty" }} </b>
                                            @endif   
                                            </small></label>
                                  </div>
                                  <div class="col-1 col-md-12">
                                      {{-- <input type="text" name="gambar_berita" class="form-control-file" value=" @foreach ($categoriesusers as $categoriesuser) {!! $categoriesuser->gambar_berita !!}  " style=" background-color: lightgreen;"> --}}
                                  </div>
                                </div>
                             </div>
                             <div class="form-group">
                                <div class="input-group">
                                  <div class="col col-md-12">
                                        <label for="file-multiple-input" class=" form-control-label"><strong>Url Video Berita Terpasang</strong> <small>Upload Video ke : <a href="https://www.youtube.com/" target="_blank">  https://www.youtube.com/ </a>Dapatkan Link pada: Bagikan -> Sematkan -> Ambil Link Iframe, pada Youtube</small></label>
                                  </div>
                                  <div class="col-1 col-md-12">
                                    <textarea name="video" id="video" cols="130" rows="3" 
                                        style="background-color: lightgreen;"> {!! $categoriesuser->video !!} 
                                    </textarea>
                                  </div>
                                </div>
                             </div>
                             <div class="form-group">
                                <div class="input-group">
                                  <div class="col col-md-12">
                                        <label for="file-multiple-input" class=" form-control-label"><strong>Video Berita Terpasang Saat ini</strong>
                                            <small>
                                            @if ($categoriesuser->video !== null)
                                               {{"Status :: "}} <b> {{ "OK" }} </b>
                                            @else
                                               {{"Status ::"}} <b> {{ "Empty" }} </b>
                                            @endif   
                                            </small>
                                        </label>
                                  </div>
                                  <div class="col-1 col-md-12">
                                    <div class="youtube-responsive">
                                        <iframe width="100%" height="350" 
                                        src="
                                        @if ($categoriesuser->video !== null)
                                            {{ $categoriesuser->video }}
                                        @else
                                           {{"Status :: Empty"}} 
                                        @endif   
                                        " frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                        </iframe>
                                      </div>
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
                                   <div class="card-header">
                                       <strong>Update</strong>
                                   </div>
                                   <div class="card-body">
                                    <input type="text" name="id" class="form-control-file" hidden="hidden" 
                                    value="{!! $categoriesuser->id !!}  " 
                                    style=" background-color: lightgreen;">
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
