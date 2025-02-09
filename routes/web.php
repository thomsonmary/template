<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ErorController;
use App\Http\Controllers\Homepage\HomepageController;
use App\Http\Controllers\TampilWebsiteController\TampilWebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::namespace('TampilWebsiteController')->group(function () {
  Route::get('/', [TampilWebsiteController::class, 'index']);

  //Detil Berita : Ina,  Eng
  // Route::get('news/{slug}', [TampilWebsiteController::class, 'showslug'])->name('news');
  Route::get('news/{sluk}', [TampilWebsiteController::class, 'showsluk'])->name('news');

  //Memisahkan Berita dalam Kategori
  Route::get('categorie-1/{nama_kategori}', [TampilWebsiteController::class, 'showKategori1'])->name('1');
  Route::get('categorie-2/{nama_kategori}', [TampilWebsiteController::class, 'showKategori2'])->name('2');
  Route::get('categorie-3/{nama_kategori}', [TampilWebsiteController::class, 'showKategori3'])->name('3');
  Route::get('categorie-4/{nama_kategori}', [TampilWebsiteController::class, 'showKategori4'])->name('4');
  Route::get('categorie-5/{nama_kategori}', [TampilWebsiteController::class, 'showKategori5'])->name('5');
  Route::get('categorie-6/{nama_kategori}', [TampilWebsiteController::class, 'showKategori6'])->name('6');
  Route::get('categorie-7/{nama_kategori}', [TampilWebsiteController::class, 'showKategori7'])->name('7');
  Route::get('categorie-8/{nama_kategori}', [TampilWebsiteController::class, 'showKategori8'])->name('8');
});

Route::get('/home', [HomepageController::class, 'index'])->name('home');

Auth::routes();
// show form route
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::get('register', [RegisterController::class, 'showRegistrationForm']);
// Sebelum di namespace
//	Route::resource('/admin/users','Admin\UsersController', ['except' => ['show', 'create', 'store']]);

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function () {  //->prefix('admin')->name('admin.')
  Route::get('/users', [UsersController::class, 'index'])->name('users.dashboard');
  // Route::resource('/users', UsersController::class);

  // Route::resource('/users', UsersController::class, ['except' => ['show', 'create', 'store']]);
  Route::get('/users/management', [UsersController::class, 'management'])->name('users.management');
  Route::get('/users/{user}/profile', [UsersController::class, 'profile'])->name('users.profile');
  Route::get('/users/template', [UsersController::class, 'template'])->name('users.template');
  Route::post('/users/{id}/update_template', [UsersController::class, 'updateTemplate'])->name('users.update_template');
  // Route::resource('/news', 'NewsController', ['except' => ['show', 'store']]);
  Route::get('/news/berita', [NewsController::class, 'berita'])->name('news.berita');
  Route::get('/news/create', [NewsController::class, 'create'])->name('news.create'); //untuk masuk ke tambah.blade
  Route::post('/news/tambah', [NewsController::class, 'tambah'])->name('news.tambah'); // untuk menyimpan dari tambah.blade ke database
  Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
  Route::post('/news/{id}/update', [NewsController::class, 'update'])->name('news.update');

  Route::post('/news/{id}/aktif', [NewsController::class, 'updateAktif'])->name('news.aktif');
  Route::post('/news/{id}/headline', [NewsController::class, 'updateHeadline'])->name('news.headline');
  Route::post('/news/{id}/trending', [NewsController::class, 'updateTrending'])->name('news.trending');


  Route::post('/news/{id}/destroy', [NewsController::class, 'destroy'])->name('news.destroy');
});
// Route::get('/login', [AutentikasiController::class, 'rest'])->name('autentikasi.rest');

Route::get('eror', [ErorController::class, 'index'])->name('erorpage');
// Route::get('/autentikasi', [AutentikasiController::class, 'index'])->name('autentikasi.index');
// post credential to the login method
// Route::post('login-admin', [LoginController::class, 'login'])->name('login');
// Route::post('/autentikasi-rest', [AutentikasiController::class, 'authrest'])->name('autentikasi.rest.post');
// Route::get('/prodi', function () {
//   $client = new \GuzzleHttp\Client();
//   $url = "https://endpoint.stkip-pgri-sumbar.ac.id/index.php/v1/evoting/program_studi";
//   $response = $client->get(
//     $url,
//     [
//       'headers' => [
//         'X-API-KEY' => 'EMONEVhasdjkhui23h487ofihsdf897234r',
//       ],
//     ]
//   );
//   dd($response->getBody());
// });
