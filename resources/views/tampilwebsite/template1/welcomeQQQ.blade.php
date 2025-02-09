<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Ku</title>
</head>
<body>
  <h1>  BERITA :: Jumlah Berita :                   {{ count($categoriesusers) }}

 </h1>
<!-- INI JUGA BISA DG MENYEBUTKAN LANGSUNG TAPI TIDAK PRAKTIS
 <a href="{#{ url('/Category1/laravel') }}">{#{ 'laravel' }} </a> <br>
 <a href="{#{ url('/Category2/content-management-system') }}">{#{ 'Content Management System' }} </a>

-->
 @foreach ($categories1 as $categorie1)
 <a href="{{ route('categorie-1', $categorie1->slug_kategori) }}">{{ $categorie1->nama_kategori }} </a>
 @endforeach


            <table width="100%" id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead align="center">
                    <tr>
                        <th width="3%">No</th>
                        <th width="40%">Judul Berita</th>
                        <th width="10%">Tanggal</th>
                        <th width="14%">Penulis</th>
                        <th width="5%">Penggal Isi</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                  $no = 1;
                  @endphp
                  Jumlah Kategori Laravel : {{ $hitungKategori1->count() }}
                  @foreach ($categoriesusers as $categorieuser)
                    @if ($categorieuser->categorie_id==1 && $categorieuser->aktif=="Y")
                
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td> <img src="{{ $categorieuser->gambar_berita }}" border="0" />
                           <a href="{{ route('news', $categorieuser->sluk ) }}">{{ $categorieuser->judul_berita_ina }}</a>
                      </td>
                      <td><a href="">{{ $categorieuser->tanggal }} </a> </td>
                      <td><b>{{ $categorieuser->name }}</b></td>
                      <td>{!! substr($categorieuser->isi_berita_ina, 0, 150) !!}
                        <a href="{{ route('news', $categorieuser->sluk ) }}">[...]</a></td>
                    @endif
                  @endforeach
                     </tr>
                </tbody>
            </table>

<h1> KATEGORI BERITA CMS </h1>
@foreach ($categories2 as $categorie2)
<a href="{{ route('categorie-2', $categorie2->slug_kategori) }}">{{ $categorie2->nama_kategori }} </a>
@endforeach
          <table width="100%" id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead align="center">
                  <tr>
                      <th width="3%">No</th>
                      <th width="40%">Judul Berita</th>
                      <th width="10%">Tanggal</th>
                      <th width="14%">Penulis</th>
                      <th width="10%">Penggal Isi</th>
                  </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                Jumlah Kategori CMS : {{ $hitungKategori2->count() }}
                @foreach ($categoriesusers as $categorieuser)
                  @if ($categorieuser->categorie_id==2 && $categorieuser->aktif=="Y")
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td><img src="{{ $categorieuser->gambar_berita }}" border="0" /><a href="{{ route('news', $categorieuser->sluk ) }}">{{ $categorieuser->judul_berita_ina }}</a> </td>
                    <td><a href="">{{ $categorieuser->tanggal }} </a> </td>
                    <td><b>{{ $categorieuser->name }}</b></td>
                    <td>{!! substr($categorieuser->isi_berita_ina, 0, 150) !!}
                      <a href="{{ route('news', $categorieuser->sluk ) }}">[...]</a></td>
                  @endif
                @endforeach
                   </tr>
              </tbody>
          </table>


<h1> KATEGORI BERITA </h1>
@foreach ($categories3 as $categorie3)
<a href="{{ route('categorie-3', $categorie3->slug_kategori) }}">{{ $categorie3->nama_kategori }} </a>
@endforeach
<table width="100%" id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead align="center">
                  <tr>
                      <th width="3%">No</th>
                      <th width="40%">Judul Berita</th>
                      <th width="10%">Tanggal</th>
                      <th width="14%">Penulis</th>
                      <th width="10%">Penggal Isi</th>
                  </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                Jumlah Kategori SQL : {{ $hitungKategori3->count() }}
                @foreach ($categoriesusers as $categorieuser)
                  @if ($categorieuser->categorie_id==3 && $categorieuser->aktif=="Y")
                    <tr>
                    <td>{{ $no++ }}</td>
                    <td><img src="{{ $categorieuser->gambar_berita }}" border="0" /><a href="{{ route('news', $categorieuser->sluk ) }}">{{ $categorieuser->judul_berita_ina }}</a> </td>
                    <td><a href="">{{ $categorieuser->tanggal }} </a> </td>
                    <td><b>{{ $categorieuser->name }}</b></td>
                    <td>{!! substr($categorieuser->isi_berita_ina, 0, 150) !!}<a href="{{ route('news', $categorieuser->sluk ) }}">[...]</a></td>
                  @endif
                @endforeach
                   </tr>
              </tbody>
          </table>



</body>
</html>
