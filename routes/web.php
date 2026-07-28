<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/all',function(){

    $data = session()->all();

    echo '<pre>';
    print_r($data);
    echo '</pre>';

});

Route::get('/store',function(Request $request){

     session(['name'=>'yahoo baba']);

        session()->put(['city'=>'lahore']);

        $request->session()->put(['using'=>'request']);





        return redirect('/all');


});

Route::get('/show',function(){

    session()->regenerate();
    // $data = session()->get('city');
    // $data = session()->except(['_token']);
//    if(session()->has('name')){
//       $data = session()->get('name');
//       echo $data;
//    }else{
//        echo 'name has no value';
//    }

//    echo '<pre>';
//     print_r($data);
//     echo '</pre>';


});
Route::get('/forget',function(){

     session()->flush();

     return redirect('/all');


});
Route::get('/delete',function(){

     session()->invalidate();

     return redirect('/all');

});


Route::get('/setting',function(){

     session()->flash('status','this is flash once time msg');

     return view('/setting');


});

Route::resource('tests', \App\Http\Controllers\CustomController::class);


