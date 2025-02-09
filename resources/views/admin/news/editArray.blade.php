/*
   * Show the form for editing the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response

public function edit(User $news)
{
  //  dd($news);
  //Pakai public function edit(User $news)  agar nama_kategori bisa di array
  $categories = Categorie::all();
  $tags = Tag::all();
  return view('admin.news.edit')->with(['categories' => $categories, 'news' => $news, 'tags' => $tags]);
  // Catatan : terkendala pada public function edit(User $news), harusnya untuk headline atau aktif tanpa User.
  //Telah diatasi dengan menambah $news->categories pada edit.blade.php lihat editArray
}
*/


@foreach ($news->categories as $categorie)
  <input type="text" name="" value="{{ $categorie->pivot->judul_berita_ina }} ">
  <input type="text" name="" value="{{ $categorie->pivot->judul_berita_eng }} ">
    <label></label>
@endforeach
<br>
@foreach ($categories as $categorie)
  <div class="form-check">
    <input type="checkbox" name="nama_kategori[]" value="{{ $categorie->id }}"
    @if ($news->categories->pluck('id')->contains($categorie->id)) checked @endif >
      <label><b>{{ $categorie->nama_kategori }}</b></label>
  </div>
@endforeach
<br>
@foreach ($news->categories as $categorie) <!--- dari controller harus pakai ::   public function edit($news)   --->
  <label class=" form-control-label">Headline ?</label>
  <div class="radio">
   <label for="radio1" class="form-check-label ">
       <input type="radio" id="radio1" name="headline" value="Y" @if ($categorie->pivot->headline === 'Y' ) checked  @endif class="form-check-input">Yes
   </label>
  </div>
  <div class="radio">
   <label for="radio2" class="form-check-label ">
       <input type="radio" id="radio2" name="headline" value="Y" @if ($categorie->pivot->headline === 'N' ) checked  @endif class="form-check-input">No
   </label>
  </div>

  <br>
  <label class=" form-control-label">Aktif ?</label>
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
@endforeach
<br>

<h2>Kategori</h2>
<div style=" background-color: lightblue; height: 100px; width: 400px; overflow-y: auto; " >
  @foreach ($categories as $categorie)
    <div class="form-check">
      <input type="checkbox" name="nama_kategori[]" value="{{ $categorie->id }}"
      @if ($news->categories->pluck('id')->contains($categorie->id)) checked @endif >
        <label><b>{{ $categorie->nama_kategori }}</b></label>
    </div>
  @endforeach
</div>
<br><br><br><br><br>
<h2>Kategori</h2>
<select class="standardSelect" tabindex="1" required>
    @foreach ($categories as $categorie)
      @if ($news->id === $categorie->id)
       <option value="{{$categorie->id}}" selected > {{ $categorie->nama_kategori }} </option>
      @else
      <option value="{{$categorie->id}}"> {{ $categorie->nama_kategori }} </option>
    @endif
  @endforeach
</select>
<br><br><br>

<h2>TAGS</h2>
<div class="form-check">
@foreach ($news->categories as $categorie)
    <input type="checkbox" name="tagLihat" value="{{ $categorie->pivot->id }}"
    @if ($news->categories->pluck('tag')->contains($categorie->pivot->id)) checked  @endif  >
      <label><b>{{ $categorie->pivot->tag }}</b></label>
@endforeach
@foreach ($tags as $tag)
<input type="checkbox" name="tag" value="{{ $tag->nama_tag }}">
        <label><b>{{ $tag->nama_tag }}</b></label>

@endforeach
</div>
