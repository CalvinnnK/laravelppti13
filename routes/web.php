<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('login',[LoginController::class, 'index']);
// function(){
//     return 
// }

Route::get('/hello', function(){
    echo "Hello World";
    return redirect()->route('belajar');
});

Route::get('/belajar', function(){
    echo "<h1>Hello World</h1>";
    echo "<p>Learning Laravel</p>";
})-> name('belajar');

Route::get('/mahasiswa/ppti/binus/calvin', function(){
    echo "<h2 style='text-align:center>Welcome Calvin</h2>";
});

// ngisi variable
// Route::get('/mahasiswa/{id}/{nama?}/{jurusan?}', 
// function($q, $a = "Calvin",$b = 'PPTI'){
//     return "ID $q Mahasiswa $a jurusan $b";
// }) -> where('id','[0-9]+');



Route::get('/contact-us', function(){
    return "Contact us";
});


Route::redirect('/hubungi-kami','/contact-us');


// Mengiri data ke view
//-argument, method with, compact

// ngirim data dari argument
// Route::get('/mahasiswa', function(){
//     return view('universitas.mahasiswa',[
//         'nama' => "calvin kamardi", 
//         'jurusan' => 'PPTI'
//     ]);
// });


// ngirim data dengan with
Route::get('/mahasiswa', function(){
    $arrMhs=[
    'nama1' => "calvin",
    'nama2' => 'Kucing',
    'nama3' => 'cuaks'
    ];


    return view('universitas.mahasiswa',[
        'nama' => $arrMhs, 
        'jurusan' => 'PPTI'
    ])-> with('univ','Universitas Binus')
    ->with('ppti', '13')
    ->with('lokasi','sentul');
});

Route::get('/cekobject', [MahasiswaController::class,'cekobject']);

Route::get('/insert', [MahasiswaController::class,'insert']);