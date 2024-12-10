<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Ku</title>
</head>
<body>

  @foreach ($categoriesusers as $categorieuser)
              ID BERITA : {{ $categorieuser->id }} :: {{ $categorieuser->judul_berita_ina  }} <br>
              ID KATEGORI : {{ $categorieuser->categorie_id }} ::
              @if ($categorieuser->categorie_id==1) 
              <a href="{{ route($categorieuser->id, $categorieuser->slug_kategori) }}"> {{$categorieuser->nama_kategori}} </a>
              @elseif ($categorieuser->categorie_id==2) 
              <a href="{{ route($categorieuser->id, $categorieuser->slug_kategori) }}"> {{$categorieuser->nama_kategori}} </a>
              @elseif ($categorieuser->categorie_id==3) 
              <a href="{{ route($categorieuser->id, $categorieuser->slug_kategori) }}"> {{$categorieuser->nama_kategori}} </a>
              @elseif ($categorieuser->categorie_id==4) 
              <a href="{{ route($categorieuser->id, $categorieuser->slug_kategori) }}"> {{$categorieuser->nama_kategori}} </a>
              @elseif ($categorieuser->categorie_id==5) 
              <a href="{{ route($categorieuser->id, $categorieuser->slug_kategori) }}"> {{$categorieuser->nama_kategori}} </a>
              @elseif ($categorieuser->categorie_id==6) 
              <a href="{{ route($categorieuser->id, $categorieuser->slug_kategori) }}"> {{$categorieuser->nama_kategori}} </a>
              @elseif ($categorieuser->categorie_id==7) 
              <a href="{{ route($categorieuser->id, $categorieuser->slug_kategori) }}"> {{$categorieuser->nama_kategori}} </a>
              @elseif ($categorieuser->categorie_id==8) 
              <a href="{{ route($categorieuser->id, $categorieuser->slug_kategori) }}"> {{$categorieuser->nama_kategori}} </a>
              @endif <br>
              PENULIS  : {{  $categorieuser->name  }}  <br>
              ISI BERITA : {!! $categorieuser->isi_berita_ina !!} <br>
              <img src="{{ $categorieuser->gambar_berita }}" border="0" /> <br>
              BERITA VIDEO : 

              <div class="youtube-responsive">
                <iframe width="560" height="315" 
                src="{{ $categorieuser->video }}" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
                </iframe>
              </div>
  @endforeach
<br><br><br>

</body>
</html>
