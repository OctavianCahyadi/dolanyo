<?php

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



Route::get('/posts/{post}', 'PostController@single');
Route::get('/posts1/{post}', 'PostController@nousersingle');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home','HomeController@index')->name('home');


Route::get('/post','PostController@all');
Route::get('/post1','PostController@nouserall');

Route::get('/card','PageController@card');
Route::get('/contact','PageController@contact');
Route::get('/contactall','PageController@contactall');
Route::get('/email','PageController@email');
Route::get('/profile/{id}','PageController@profile');
Route::get('/editprofile','PageController@editprofile');
Route::put('/updateprofile','Admin\DashboardController@updatebyuser');

Route::get('/','PageController@home');

Route::get('/viewpaket','PageController@paket');
Route::get('/viewpaket2','PageController@paketall');

Route::get('/paket/{kategori}','PaketController@postpaket');
Route::get('/paketdetail/{paket}','PaketController@single');

Route::get('/paket2/{kategori}','PaketController@postpaketall');
Route::get('/paketdetail2/{paket}','PaketController@singleall');

Route::post('/kirimemail','TransaksiController@send');
Route::post('/kirimemailbatal','TransaksiController@sendbatal');
Route::post('/transaksi','TransaksiController@transaksi');
Route::post('/bantuan','BantuanController@store');

Route::get('/rekomendasi0','PageController@rekomendasi0');
Route::get('/rekomendasi1','PageController@rekomendasi1');
Route::get('/rekomendasi2','PageController@rekomendasi2');
Route::get('/rekomendasi3','PageController@rekomendasi3');
Route::get('/rekomendasi4','PageController@rekomendasi4');

Route::get('/rekomendasi/{id}','RekomendasiController@store')->name('rekomendasi');
Route::get('/showrekomendasi/{id}','RekomendasiController@show')->name('showrekomendasi');
Route::post('/inputrekomendasi0/{id}','RekomendasiController@input0');
Route::post('/inputrekomendasi1/{id}','RekomendasiController@input1');
Route::post('/inputrekomendasi2/{id}','RekomendasiController@input2');
Route::post('/inputrekomendasi3/{id}','RekomendasiController@input3');
Route::post('/inputrekomendasi4/{id}','RekomendasiController@input4');

Route::get('/viewgallery','GalleryController@showgallery');
Route::get('/viewgalleryall','GalleryController@showgalleryall');
Route::get('/kategoriall','KategoriController@kategoriall');
Route::get('/kategori','KategoriController@kategori');


Route::group(['middleware'=>['auth','admin']],function(){

    // Route::get('/dashboard', function(){
    //     return view('admin.post');
    // });
    Route::get('/dashboard','PageController@back');

    Route::get('/admin/role-register','Admin\DashboardController@registered')->name('show.user');;
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
    Route::get('/user/cari','Admin\DashboardController@cari');
    
    
    Route::get('/posted','PostController@posted')->name('posted');
    Route::get('/post-edit/{id}','PostController@edit');
    Route::put('/post-update/{id}','PostController@update');

    Route::get('/admin/post-create','PostController@create')->name('post.create');
    Route::post('/post-store','PostController@store');
    Route::delete('/post-delete/{id}','PostController@destroy');
    Route::get('/postcari','PostController@cari');

    Route::get('/admin/paket','PaketController@all')->name('show.paket');
    Route::get('/admin/paket-create','PaketController@create');
    Route::post('/paket-store','PaketController@store');
    Route::delete('/paket-delete/{id}','PaketController@destroy'); 
    Route::get('/paketcari','PaketController@cari');
    Route::put('/paket-update/{id}','PaketController@update');
    Route::get('/paket-edit/{id}','PaketController@edit');

    Route::get('/admin/transaksi','TransaksiController@posted')->name('show.transaksi');  
    Route::get('/konfirmasi/{id}','TransaksiController@konfirmasi');  
    Route::get('/transaksicari','TransaksiController@cari'); 
    Route::delete('/transaksi-delete/{id}','TransaksiController@destroy');

    Route ::get('admin/gallery','GalleryController@all')->name('show.gallery');
    Route::get('/admin/gallery-create','GalleryController@create');
    Route::post('/gallery-store','GalleryController@store');
    Route::delete('/gallery-delete/{id}','GalleryController@delete');
    
    Route ::get('admin/kategori','KategoriController@show')->name('show.kategori');
    
    
    Route::get('/admin/kategori-create','KategoriController@create')->name('kategori.create');
    Route::post('/kategori-store','KategoriController@store');
    Route::delete('/kategori-delete/{id}','KategoriController@destroy');
    Route::get('/kategori-edit/{id}','KategoriController@edit');
    Route::put('/kategori-update/{id}','KategoriController@update');

    Route ::get('admin/bantuan','BantuanController@show')->name('show.bantuan');
    Route::get('/bantuan/{id}','BantuanController@respons');  
    Route::post('/kirimresponse','BantuanController@send');
    Route::delete('/bantuan-delete/{id}','BantuanController@destroy');
    Route::get('/showunrespons','BantuanController@showunrespons');
    
});




