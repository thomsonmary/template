<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category Detail</title>
</head>
<body>
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
       JUMLAH BERITA dengan Kategori   :  {{ $categoriesusers->count() }}
        @foreach ($categoriesusers as $categorieuser)
            <tr>
            <td>{{ $no++ }}</td>
            <td><img src="{{ $categorieuser->gambar_berita }}" border="0" /><a href="{{ route('news', $categorieuser->sluk ) }}">{{ $categorieuser->judul_berita_ina }}</a> </td>
            <td><a href="">{{ $categorieuser->tanggal }} </a> </td>
            <td><b>{{ $categorieuser->name }}</b></td>
            <td>{!! substr($categorieuser->isi_berita_ina, 0, 150) !!}<a href="{{ route('news', $categorieuser->sluk ) }}">[...]</a></td>
        @endforeach
           </tr>
      </tbody>
  </table>
<br><br><br>

</body>
</html>
