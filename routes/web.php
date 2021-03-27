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

    //echo "wee";
});

Route::get('/outlogin', function () {
    return view('login');
});

Route::get('/inlogin', function () {
    return view('login.index');
});

Route::get('/abc', function () {
    return view('login.test');
});

//Route::get('/login', 'LoginController@index');


Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@verify');
Route::get('/test', 'App\Http\Controllers\LoginController@test');
Route::get('/logout', 'App\Http\Controllers\LogoutController@index');



Route::get('/home/registration', 'App\Http\Controllers\registrationcontroller@registrationcreate');
Route::post('/home/registration', 'App\Http\Controllers\registrationcontroller@registrationstore');



Route::get('/home/modaratorregistration', 'App\Http\Controllers\modaratorregController@registrationcreate');
Route::post('/home/modaratorregistration', 'App\Http\Controllers\modaratorregController@registrationstore');

Route::group(['middleware'=> 'sess'], function(){

    Route::get('/home', 'App\Http\Controllers\HomeController@index')->middleware('sess');
    // userlist curd------------------------------------------------------------------------------------------------

Route::get('/home/userlist', 'App\Http\Controllers\userlistcontroller@userlist');
Route::get('/home/userlist/search', 'App\Http\Controllers\userlistcontroller@userlist_search');

Route::get('/home/usercreate', 'App\Http\Controllers\userlistcontroller@usercreate');
Route::post('/home/usercreate', 'App\Http\Controllers\userlistcontroller@userstore');

Route::get('/home/useredit/{id}', 'App\Http\Controllers\userlistcontroller@useredit');//edittttt start
Route::post('/home/useredit/{id}', 'App\Http\Controllers\userlistcontroller@userupdate');

Route::get('/home/userdelete/{id}', 'App\Http\Controllers\userlistcontroller@userdelete');
Route::post('/home/userdelete/{id}', 'App\Http\Controllers\userlistcontroller@userdestroy');

Route::get('/home/userdetails/{id}', 'App\Http\Controllers\userlistcontroller@usershow');



 // modaratoruserlist curd------------------------------------------------------------------------------------------------

 Route::get('/home/modaratoruserlist', 'App\Http\Controllers\modaratoruserlistcontroller@modaratoruserlist');
 Route::get('/home/modaratoruserlist/search', 'App\Http\Controllers\modaratoruserlistcontroller@modaratoruserlist_search');

 Route::get('/home/modaratorusercreate', 'App\Http\Controllers\modaratoruserlistcontroller@modaratorusercreate');
 Route::post('/home/modaratorusercreate', 'App\Http\Controllers\modaratoruserlistcontroller@modaratoruserstore');

 Route::get('/home/modaratoruseredit/{id}', 'App\Http\Controllers\modaratoruserlistcontroller@modaratoruseredit');//edittttt start
 Route::post('/home/modaratoruseredit/{id}', 'App\Http\Controllers\modaratoruserlistcontroller@modaratoruserupdate');

 Route::get('/home/modaratoruserdelete/{id}', 'App\Http\Controllers\modaratoruserlistcontroller@modaratoruserdelete');
 Route::post('/home/modaratoruserdelete/{id}', 'App\Http\Controllers\modaratoruserlistcontroller@modaratoruserdestroy');

 Route::get('/home/modaratoruserdetails/{id}', 'App\Http\Controllers\modaratoruserlistcontroller@modaratorusershow');


// Dayshift curd------------------------------------------------------------------------------------------------

Route::get('/home/sellerlist', 'App\Http\Controllers\HomeController@sellerlist');
Route::get('/home/sellerlist/search', 'App\Http\Controllers\HomeController@sellerlist_search');

Route::get('/home/sellercreate', 'App\Http\Controllers\HomeController@sellercreate');
Route::post('/home/sellercreate', 'App\Http\Controllers\HomeController@sellerstore');

Route::get('/home/selleredit/{id}', 'App\Http\Controllers\HomeController@selleredit');//edittttt start
Route::post('/home/selleredit/{id}', 'App\Http\Controllers\HomeController@sellerupdate');

Route::get('/home/sellerdelete/{id}', 'App\Http\Controllers\HomeController@sellerdelete');
Route::post('/home/sellerdelete/{id}', 'App\Http\Controllers\HomeController@sellerdestroy');

Route::get('/home/sellerdetails/{id}', 'App\Http\Controllers\HomeController@sellershow');

// Nightshift curd------------------------------------------------------------------------------------------------

Route::get('/home/specialist', 'App\Http\Controllers\HomeController@specialist');
Route::get('/home/specialist/search', 'App\Http\Controllers\HomeController@specialist_search');

Route::get('/home/specialistcreate', 'App\Http\Controllers\HomeController@specialistcreate');
Route::post('/home/specialistcreate', 'App\Http\Controllers\HomeController@specialiststore');

Route::get('/home/specialistedit/{id}', 'App\Http\Controllers\HomeController@specialistedit');//edittttt start
Route::post('/home/specialistedit/{id}', 'App\Http\Controllers\HomeController@specialistupdate');

Route::get('/home/specialistdelete/{id}', 'App\Http\Controllers\HomeController@specialistdelete');
Route::post('/home/specialistdelete/{id}', 'App\Http\Controllers\HomeController@specialistdestroy');

Route::get('/home/specialistdetails/{id}', 'App\Http\Controllers\HomeController@specialistshow');






// highlighted product/content---------------------------------



Route::get('/home/productlist', 'App\Http\Controllers\productlistController@productlist')->name('home.productlist');
Route::get('/home/productlist/search', 'App\Http\Controllers\productlistController@productlist_search');

Route::get('/home/productcreate', 'App\Http\Controllers\productlistController@productcreate')->middleware('sess')->name('home.productcreate');
Route::post('/home/productcreate', 'App\Http\Controllers\productlistController@productstore');

Route::get('/home/productedit/{id}', 'App\Http\Controllers\productlistController@productedit');//edittttt start
Route::post('/home/productedit/{id}', 'App\Http\Controllers\productlistController@productupdate');

Route::get('/home/productdelete/{id}', 'App\Http\Controllers\productlistController@productdelete');
Route::post('/home/productdelete/{id}', 'App\Http\Controllers\productlistController@productdestroy');

Route::get('/home/productdetails/{id}', 'App\Http\Controllers\productlistController@productshow');



/// ALL content---------------------------------



Route::get('/home/contentlist', 'App\Http\Controllers\contentController@productlist')->name('home.contentlist');
Route::get('/home/contentlist/search', 'App\Http\Controllers\contentController@productlist_search');

Route::get('/home/contentcreate', 'App\Http\Controllers\contentController@productcreate')->middleware('sess')->name('home.contentcreate');
Route::post('/home/contentcreate', 'App\Http\Controllers\contentController@productstore');

Route::get('/home/contentedit/{id}', 'App\Http\Controllers\contentController@productedit');//edittttt start
Route::post('/home/contentedit/{id}', 'App\Http\Controllers\contentController@productupdate');

Route::get('/home/contentdelete/{id}', 'App\Http\Controllers\contentController@productdelete');
Route::post('/home/contentdelete/{id}', 'App\Http\Controllers\producontentControllerctlistController@productdestroy');

Route::get('/home/contentdetails/{id}', 'App\Http\Controllers\contentController@productshow');

// Admin curd------------------------------------------------------------------------------------------------
Route::get('/home/admin_profile', 'App\Http\Controllers\adminprofileController@admin_profile_show');

Route::get('/home/admin_profile_edit/{id}', 'App\Http\Controllers\adminprofileController@admin_profile_edit');
Route::post('/home/admin_profile_edit/{id}', 'App\Http\Controllers\adminprofileController@admin_profile_update');

/// movie list

Route::get('/home/movielist', 'App\Http\Controllers\movieController@productlist')->name('home.productlist');
Route::get('/home/movielist/search', 'App\Http\Controllers\movieController@productlist_search');

Route::get('/home/moviecreate', 'App\Http\Controllers\movieController@productcreate')->middleware('sess')->name('home.productcreate');
Route::post('/home/moviecreate', 'App\Http\Controllers\movieController@productstore');

Route::get('/home/movieedit/{id}', 'App\Http\Controllers\movieController@productedit');//edittttt start
Route::post('/home/movieedit/{id}', 'App\Http\Controllers\movieController@productupdate');

Route::get('/home/moviedelete/{id}', 'App\Http\Controllers\movieController@productdelete');
Route::post('/home/moviedelete/{id}', 'App\Http\Controllers\movieController@productdestroy');

Route::get('/home/moviedetails/{id}', 'App\Http\Controllers\movieController@productshow');
});
