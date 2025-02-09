<?php

namespace App\Http\Controllers\TampilWebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\CategorieUser;
use App\Categorie;
use App\User;
use App\Tag;
use App\Visitor;
use App\Template;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\String_;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class TampilWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // TAMPIL PADA HALAMAN WELCOME
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.view',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                       ->latest('categorie_user.id')
                        ->get();
      $hitungKategori1 = DB::table('categorie_user')
                      ->where('categorie_id', '=', 1)
                      ->get();
      $hitungKategori2 = DB::table('categorie_user')
                      ->where('categorie_id', '=', 2)
                      ->get();
      $hitungKategori3 = DB::table('categorie_user')
                      ->where('categorie_id', '=', 3)
                      ->get();

      $categories1 = DB::table('categories')
      ->where('id', '=', 1)
      ->get();
      $categories2 = DB::table('categories')
      ->where('id', '=', 2)
      ->get();
      $categories3 = DB::table('categories')
      ->where('id', '=', 3)
      ->get();
      $categories4 = DB::table('categories')
      ->where('id', '=', 4)
      ->get();


      $hitungKategori2 = DB::table('categorie_user')
                      ->where('categorie_id', '=', 2)
                      ->get();


      $template = Template::all();
      foreach($template as $key) 
       // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.template1ISI', 
        compact('categoriesusers', 
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3', 
        'template',
        'categories1', 'categories2', 'categories3', 'categories4'
         ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.template2', 
        compact('categoriesusers', 
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3', 
        'template',
        'categories1', 'categories2', 'categories3', 'categories4'
      ));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.template3', 
        compact('categoriesusers', 
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3', 
        'template',
        'categories1', 'categories2', 'categories3', 'categories4'
      ));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.template4', 
        compact('categoriesusers', 
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3', 
        'template',
        'categories1', 'categories2', 'categories3', 'categories4'
      ));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.template5', 
        compact('categoriesusers', 
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3', 
        'template',
        'categories1', 'categories2', 'categories3', 'categories4'
      ));
      }
  
           //tampilwebsite.template1.templateCOBA DB::table('templates')->where('template', '=', 'Pertama')->get();

    }

    public function showsluk($sluk) // KLIK DETIL BERITA INA, MENDAPATKAN ROUTE BERNAMA "SLUK"
    {
   
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.view',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_user.sluk', '=', $sluk)
                        ->get();
      // START MEMASUKKAN DATA KUNJUNGAN KE VISITOR
          // Jenis Browser
          $browser = $_SERVER['HTTP_USER_AGENT'];
          $chrome = '/Chrome/';
          $firefox = '/Firefox/';
          $ie = '/IE/';
          if (preg_match($chrome, $browser))
              $data = "Chrome/Opera";
          if (preg_match($firefox, $browser))
              $data = "Firefox";
          if (preg_match($ie, $browser))
              $data = "IE";
          // untuk mengambil informasi dari pengunjung
          $ipaddress = $_SERVER['REMOTE_ADDR']."";
          $browser = $data;
          $tanggal = date('Y-m-d');
          $kunjungan = 1;
          // Daftarkan Kedalam Session Lalu Simpan Ke Database
          if (!isset($_SESSION['counterdb'])){
                $_SESSION['counterdb']=$ipaddress;
              // mysqli_query($conn,"INSERT INTO counterdb (tanggal,ip_address,counter,browser) 
              //VALUES ('".$tanggal."','".$ipaddress."','".$kunjungan."','".$browser."')");
              // TAMBAH VISITOR

              $dapatkanid = DB::table('visitors')
              ->join('categorie_user', 'categorie_user.id', '=', 'visitors.categorieuser_id')
              ->select( 'categorie_user.id',
                        'categorie_user.sluk',
                        'visitors.categorieuser_id',
                        'visitors.id',  
                        'visitors.counter' 
                        
                        )
              ->where('categorie_user.sluk', '=', $sluk) //untuk mendapatkan id berita dari sluk sehingga bisa terbaca di count (categorieuser.id) pada visitor
              ->get() 
              ;
   
              $tambah = new \App\Visitor;
              $tambah->categorieuser_id = 5 ;
              $tambah->tanggal = $tanggal;
              $tambah->ip_address = $ipaddress;
              $tambah->counter = $kunjungan;
              $tambah->browser = $browser;    
              $tambah->save();    
            } 


         // Hitung Jumlah Visitor
          $kemarin  = date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
          echo "KEMAREN TANGGAL". $kemarin ;
      //    $hari_ini  = mysqli_fetch_array(mysqli_query
      //('SELECT sum(counter) AS hari_ini FROM counterdb WHERE tanggal="'.date("Y-m-d").'"'));
           $hariini = DB::table('visitors')
                    ->select('counter')
                    ->WHERE('tanggal', '=', date('Y-m-d').'"')
                    ->sum('counter');
           echo "HARI INI ". $hariini ;
                    //    $kemarin = mysqli_fetch_array(mysqli_query
                    //('SELECT sum(counter) AS kemarin FROM counterdb WHERE tanggal="'.$kemarin.'"'));
          $kapatang = DB::table('visitors')
                    ->select('counter')
                    ->WHERE('tanggal', '=' .$kemarin.'"')
                    ->sum('counter');    
           echo "KEMARIN ". $kapatang ;

           //   ->join('users', 'users.id', '=', 'categorie_user.user_id')

                               
   
      session_start();
 
      if (!isset($_SESSION['count']))
      {
        $_SESSION['count'] = 1;
      }
      else
      {
        ++$_SESSION['count'];
      }
       
      echo "Anda Telah Berkunjung ke Halaman ini Sebanyak". $_SESSION['count'];
     
      $hitung = DB::table('visitors')
      ->join('categorie_user', 'categorie_user.id', '=', 'visitors.categorieuser_id')
      ->select('categorie_user.id', 'visitors.id', 'visitors.categorieuser_id', 'visitors.counter' )
      ->where('categorie_user.sluk', '=', $sluk) //untuk mendapatkan id berita dari sluk sehingga bisa terbaca di count (categorieuser.id) pada visitor
      ->count('visitors.categorieuser_id') ;

      echo "KUNJUNGAN ARTIKEL TERKAIT". "<b> :: ". $hitung ."</b> ::";
 //    $sql = mysqli_fetch_array(mysqli_query('SELECT sum(counter) as total FROM counterdb'));

      // session_destroy();
      DB::table('categorie_user')
      ->where('categorie_user.sluk', '=', $sluk)
      ->update(['categorie_user.view' => $hitung]);
      // END MEMASUKKAN DATA KUNJUNGAN KE VISITOR
   
           $hitung = DB::table('visitors')
           ->join('categorie_user', 'categorie_user.id', '=', 'visitors.categorieuser_id')
           ->select('categorie_user.id', 'visitors.id', 'visitors.categorieuser_id', 'visitors.counter' )
           ->where('categorie_user.sluk', '=', $sluk) //untuk mendapatkan id berita dari sluk sehingga bisa terbaca di count (categorieuser.id) pada visitor
           ->count('visitors.categorieuser_id') ;

           echo "KUNJUNGAN ARTIKEL TERKAIT". "<b> :: ". $hitung ."</b> ::";
      //    $sql = mysqli_fetch_array(mysqli_query('SELECT sum(counter) as total FROM counterdb'));


      $template = Template::all();
      foreach($template as $key) 
       // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilBerita', compact('categoriesusers'));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilBerita', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilBerita', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilBerita', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilBerita', compact('categoriesusers'));
      }

    }

    public function showslug($slug) // KLIK DETIL BERITA ENG, MENDAPATKAN ROUTE BERNAMA "SLUG"
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_user.slug', '=', $slug)
                        ->get();
      //Membaca pengelompokan kategori pada detil berita
      $categories1 = DB::table('categories')
      ->where('id', '=', 1)
      ->get();
      $categories2 = DB::table('categories')
      ->where('id', '=', 2)
      ->get();
      $categories3 = DB::table('categories')
      ->where('id', '=', 3)
      ->get();
      $categories4 = DB::table('categories')
      ->where('id', '=', 4)
      ->get();

      $template = Template::all();
      foreach($template as $key) 
       // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilBerita', compact('categoriesusers', 'categories1', 'categories2', 'categories3', 'categories4'));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilBerita', compact('categoriesusers', 'categories1', 'categories2', 'categories3', 'categories4'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilBerita', compact('categoriesusers', 'categories1', 'categories2', 'categories3', 'categories4'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilBerita', compact('categoriesusers', 'categories1', 'categories2', 'categories3', 'categories4'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilBerita', compact('categoriesusers', 'categories1', 'categories2', 'categories3', 'categories4'));
      }

    }
    public function showKategori1() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 1)
                        ->get();
      
      $template = Template::all();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
                              
    }
    public function showKategori2() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 2)
                        ->get();
      $template = Template::all();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
    }
    public function showKategori3() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 3)
                        ->get();
                        
      $template = Template::all();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
