@extends('admin.users.index')
@section('konten_editNews')
 <!-- Right Panel -->
<div id="right-panel" class="right-panel">
           <div class="breadcrumbs">
               <div class="col-sm-4">
                   <div class="page-header float-left">
                       <div class="page-title">
                         @foreach ($categories->users as $categorie)
                           <h1>Edit Berita :: Penulis (<b>{{ $categorie->name }})</b></h1>
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
                 <div class="col-xs-6 col-sm-6">
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
                                             <input id="judul_berita_ina" type="text"
                                             class="form-control @error('judul_berita_ina') is-invalid @enderror"
                                               name="judul_berita_ina" value="{{ $categorie->pivot->judul_berita_ina }}" required  autofocus>
                                         </div>
                                         <small class="form-text text-muted">Bahasa Indonesia</small>
                                     </div>
                                     <div class="form-group">
                                       <label class=" form-control-label">Judul Berita Eng</label>
                                       <div class="input-group">
                                           <div class="input-group-addon"><i class="fa fa-pencil-square"></i></div>
                                           <input id="judul_berita_eng" type="text"
                                           class="form-control @error('judul_berita_eng') is-invalid @enderror"
                                             name="judul_berita_eng" value="{{ $categorie->pivot->judul_berita_eng }}" required  autofocus>
                                       </div>
                                           <small class="form-text text-muted">English</small>
                                     </div>
                                     <div class="col col-md-4">
                                     <div class="form-group">
                                     <label class=" form-control-label">Headline ?</label>
                                     <div class="input-group">
                                      <div class="input-group-addon"><i class="fa fa-bullhorn"></i></div>&nbsp&nbsp&nbsp&nbsp
                                         <div class="form-check">
                                                <div class="radio">
                                                 <label for="radio1" class="form-check-label ">
                                                     <input type="radio" id="radio1" name="headline" value="Y" @if ($categorie->pivot->headline === 'Y' ) checked  @endif class="form-check-input">Yes
                                                 </label>
                                                </div>
                                                <div class="radio">
                                                 <label for="radio2" class="form-check-label ">
                                                     <input type="radio" id="radio2" name="headline" value="N"  @if ($categorie->pivot->headline === 'N' ) checked  @endif  class="form-check-input">No
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
                                                     <input type="radio" id="radio1" name="aktif" value="Y" @if ($categorie->pivot->aktif === 'Y' ) checked  @endif class="form-check-input">Yes
                                                 </label>
                                                </div>
                                                <div class="radio">
                                                 <label for="radio2" class="form-check-label ">
                                                     <input type="radio" id="radio2" name="aktif" value="Y" @if ($categorie->pivot->aktif === 'N' ) checked  @endif class="form-check-input">No
                                                 </label>
                                                </div>
                                              </div>
                                           </div>
                                         </div>
                                      </div>

                                     </div>
                                 </div>
                                 </div>
                                 <div class="col-xs-6 col-sm-6">
                                     <div class="card">
                                         <div class="card-header">
                                             <strong class="card-title">Kategori Berita</strong>
                                         </div>
                                         <div class="card-body">
                                                 <div class="form-check">
                                                   <input type="checkbox" name="nama_kategori[]" value="{{ $categories->id }}"
                                                   @if ($categories->users->pluck('id')->contains($categories->id)) checked @endif >
                                                       <label><b>{{ $categories->nama_kategori }}</b></label>

                                                     @endforeach
                                                 </div>
                                         </div>
                                     </div>
                                     <div class="card">
                                         <div class="card-header">
                                             <strong class="card-title">Tag Berita</strong>
                                         </div>
                                         <div class="card-body">
                                             <select data-placeholder="Choose a country..." multiple class="standardSelect">
                                                 <option value=""></option>
                                                 <option value="United States">SQL Scripting</option>
                                                 <option value="United Kingdom">Scripting PHP</option>
                                                 <option value="Afghanistan">Scripting HTML</option>
                                                 <option value="Aland Islands">Scripting CSS</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="card">
                                         <div class="card-header">
                                             <strong class="card-title">Kategori Khusus</strong>
                                         </div>
                                         <div class="card-body">
                                             <select data-placeholder="Your Favorite Football Team" multiple class="standardSelect" tabindex="5">
                                                 <option value=""></option>
                                                 <optgroup label="NFC EAST">
                                                     <option>Dallas Cowboys</option>
                                                     <option>New York Giants</option>
                                                     <option>Philadelphia Eagles</option>
                                                     <option>Washington Redskins</option>
                                                 </optgroup>
                                                 <optgroup label="AFC WEST">
                                                     <option>Denver Broncos</option>
                                                     <option>Kansas City Chiefs</option>
                                                     <option>Oakland Raiders</option>
                                                     <option>San Diego Chargers</option>
                                                 </optgroup>
                                             </select>
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
                                               <div class="form-group">
                                                   <label class=" form-control-label">Tulis Berita</label>
                                                   <div class="input-group">
                                                       <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                       <textarea id="isiberitaina" name="isi_berita_ina"  rows="8" cols="100"></textarea>
                                                   </div>
                                                   <small class="form-text text-muted">Ket:Pengisian Gambar dan Video harus berupa Link</small>
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
                                          <div class="form-group">
                                              <label class=" form-control-label">Tulis Berita</label>
                                              <div class="input-group">
                                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                  <textarea id="isiberitaeng" name="isi_berita_eng"  rows="8" cols="100"></textarea>
                                              </div>
                                              <small class="form-text text-muted">Ket:Pengisian Gambar dan Video harus berupa Link</small>
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
                                               <label class=" form-control-label">Date input</label>
                                               <div class="input-group">
                                                   <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                   <input class="form-control">
                                               </div>
                                               <small class="form-text text-muted">ex. 99/99/9999</small>
                                           </div>
                                           <div class="form-group">
                                               <label class=" form-control-label">Phone input</label>
                                               <div class="input-group">
                                                   <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                   <input class="form-control">
                                               </div>
                                                   <small class="form-text text-muted">ex. (999) 999-9999</small>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card">
                                       <div class="card-header">
                                           <strong>Batal</strong>
                                       </div>
                                       <div class="card-body">
                                           <button type="button" class="btn btn-outline-warning btn-lg btn-block">B A T A L</button>
                                       </div>
                                   </div><!-- /# card -->

                               </div>
                               <div class="col-xs-6 col-sm-6">
                                 <div class="card">
                                     <div class="card-header">
                                         <strong>Atribut Berita::</strong> <small>Kategori, hari, tanggal, dsb</small>
                                     </div>
                                     <div class="card-body card-block">
                                         <div class="form-group">
                                             <label class=" form-control-label">Date input</label>
                                             <div class="input-group">
                                                 <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                 <input class="form-control">
                                             </div>
                                             <small class="form-text text-muted">ex. 99/99/9999</small>
                                         </div>
                                         <div class="form-group">
                                             <label class=" form-control-label">Phone input</label>
                                             <div class="input-group">
                                                 <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                 <input class="form-control">
                                             </div>
                                                 <small class="form-text text-muted">ex. (999) 999-9999</small>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card">
                                     <div class="card-header">
                                         <strong>Update</strong>
                                     </div>
                                     <div class="card-body">
                                         <button type="button" class="btn btn-primary btn-lg btn-block">U P D A T E</button>
                                     </div>
                                 </div><!-- /# card -->
                        </form>





                     </div>



         </div><!-- .animated -->
     </div><!-- .content -->

</div><!-- /#right-panel -->

   <!-- Right Panel -->
@endsection
