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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Frontend\FrontendController@index')->name('index');
Route::get('iawnp', 'Frontend\FrontendController@iawnp')->name('iawnp');
Route::get('efd', 'Frontend\FrontendController@efd')->name('efd');
Route::get('pdb', 'Frontend\FrontendController@pdb')->name('pdb');
Route::get('ipsd', 'Frontend\FrontendController@ipsd')->name('ipsd');
Route::get('ats', 'Frontend\FrontendController@ats')->name('ats');
Route::get('hlts', 'Frontend\FrontendController@hlts')->name('hlts');
Route::get('pts', 'Frontend\FrontendController@pts')->name('pts');
Route::get('3ds', 'Frontend\FrontendController@threeds')->name('threeds');
Route::get('irs', 'Frontend\FrontendController@irs')->name('irs');
Route::get('atsd', 'Frontend\FrontendController@atsd')->name('atsd');
Route::get('mvts', 'Frontend\FrontendController@mvts')->name('mvts');
Route::get('lv', 'Frontend\FrontendController@lv')->name('lv');
Route::get('t', 'Frontend\FrontendController@t')->name('t');
Route::get('three_d', 'Frontend\FrontendController@three_d')->name('three_d');
Route::get('pcc', 'Frontend\FrontendController@pcc')->name('pcc');
Route::get('py', 'Frontend\FrontendController@py')->name('py');
Route::get('im', 'Frontend\FrontendController@im')->name('im');
Route::get('aps', 'Frontend\FrontendController@aps')->name('aps');
Route::get('osri', 'Frontend\FrontendController@osri')->name('osri');
Route::get('pcf', 'Frontend\FrontendController@pcf')->name('pcf');
Route::get('vids', 'Frontend\FrontendController@vids')->name('vids');
Route::get('etender', 'Frontend\FrontendController@etender')->name('brochure');
Route::get('aboutus', 'Frontend\FrontendController@aboutus')->name('aboutus');
Route::get('contact', 'Frontend\FrontendController@contact')->name('contact');
Route::post('send-mail', 'SendmailController@maildata')->name('send_mail');





///




Route::get('career', 'Frontend\FrontendController@career')->name('career');
Route::get('jakat', 'Frontend\FrontendController@jakat')->name('jakat');

Route::get('educational-institute', 'Frontend\FrontendController@educationinfo')->name('educational-institute');
Route::get('job-apply', 'Frontend\FrontendController@jobapply')->name('job-apply');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('/employee', 'HomeController@index')->name('home.employee');*/

Route::group(['middleware'=>'auth'],function (){
    Route::prefix ('users')->group (function () {
        //admin-dashboard
        Route::get('/view', 'Backend\UserController@view')->name('users.view');
        Route::get('/add', 'Backend\UserController@add')->name('users.add');
        Route::post('/store', 'Backend\UserController@store')->name('users.store');
        Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
        Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
        Route::post('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
    });
    Route::prefix ('profiles')->group (function () {
        //sliders
        Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
        Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
        Route::post('/update', 'Backend\ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');


    });
    Route::prefix ('logos')->group (function () {
        //admin-dashboard
        Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
        Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
        Route::post('/store', 'Backend\LogoController@store')->name('logos.store');
        Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
        Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
        Route::post('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
    });
    Route::prefix ('sliders')->group (function () {
        //slider
        Route::get('/view', 'Backend\SliderController@view')->name('sliders.view');
        Route::get('/add', 'Backend\SliderController@add')->name('sliders.add');
        Route::post('/store', 'Backend\SliderController@store')->name('sliders.store');
        Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('sliders.edit');
        Route::post('/update/{id}', 'Backend\SliderController@update')->name('sliders.update');
        Route::post('/delete/{id}', 'Backend\SliderController@delete')->name('sliders.delete');
    });
    Route::prefix ('etenders')->group (function () {
        //slider
        Route::get('/view', 'Backend\EtenderController@view')->name('etenders.view');
        Route::get('/add', 'Backend\EtenderController@add')->name('etenders.add');
        Route::post('/store', 'Backend\EtenderController@store')->name('etenders.store');
        Route::get('/edit/{id}', 'Backend\EtenderController@edit')->name('etenders.edit');
        Route::post('/update/{id}', 'Backend\EtenderController@update')->name('etenders.update');
        Route::post('/delete/{id}', 'Backend\EtenderController@delete')->name('etenders.delete');
        Route::post('/download', 'Backend\EtenderController@download')->name('etenders.download');
    });
    Route::prefix ('wde')->group (function () {
        //wde
        Route::get('/view', 'Backend\WdeController@view')->name('wdes.view');
        Route::get('/add', 'Backend\WdeController@add')->name('wdes.add');
        Route::post('/store', 'Backend\WdeController@store')->name('wdes.store');
        Route::get('/edit/{id}', 'Backend\WdeController@edit')->name('wdes.edit');
        Route::post('/update/{id}', 'Backend\WdeController@update')->name('weds.update');
        Route::post('/delete/{id}', 'Backend\WdeController@delete')->name('weds.delete');
        Route::post('/download', 'Backend\EtenderController@download')->name('etenders.download');
    });
    Route::prefix ('about')->group (function () {
        //wde
        Route::get('/view', 'Backend\AboutusController@view')->name('abouts.view');
        Route::get('/add', 'Backend\AboutusController@add')->name('abouts.add');
        Route::post('/store', 'Backend\AboutusController@store')->name('abouts.store');
        Route::get('/edit/{id}', 'Backend\AboutusController@edit')->name('abouts.edit');
        Route::post('/update/{id}', 'Backend\AboutusController@update')->name('abouts.update');
        Route::post('/delete/{id}', 'Backend\AboutusController@delete')->name('abouts.delete');
        //about_detail
        Route::get('/aview', 'Backend\AboutusController@aview')->name('aboutd.view');
        Route::get('/aadd', 'Backend\AboutusController@aadd')->name('aboutd.add');
        Route::post('/astore', 'Backend\AboutusController@astore')->name('aboutd.store');
        Route::get('/aedit/{id}', 'Backend\AboutusController@aedit')->name('aboutd.edit');
        Route::post('/aupdate/{id}', 'Backend\AboutusController@aupdate')->name('aboutd.update');
        Route::post('/adelete/{id}', 'Backend\AboutusController@adelete')->name('aboutd.delete');
    });
    //Client Picture
    Route::prefix ('client picture')->group (function () {
    Route::get('/cview', 'Backend\ClientController@cview')->name('clogos.view');
    Route::get('/cadd', 'Backend\ClientController@cadd')->name('clogos.add');
    Route::post('/cstore', 'Backend\ClientController@cstore')->name('clogos.store');
    Route::get('/cedit/{id}', 'Backend\ClientController@cedit')->name('clogos.edit');
    Route::post('/cupdate/{id}', 'Backend\ClientController@cupdate')->name('clogos.update');
    Route::post('/cdelete/{id}', 'Backend\ClientController@cdelete')->name('clogos.delete');
    });
    Route::prefix ('carriers')->group (function () {
        //slider
        Route::get('/view', 'Backend\CarrierController@view')->name('carriers.view');
        Route::get('/add', 'Backend\CarrierController@add')->name('carriers.add');
        Route::post('/store', 'Backend\CarrierController@store')->name('carriers.store');
        Route::get('/edit/{id}', 'Backend\CarrierController@edit')->name('carriers.edit');
        Route::post('/update/{id}', 'Backend\CarrierController@update')->name('carriers.update');
        Route::post('/delete/{id}', 'Backend\CarrierController@delete')->name('carriers.delete');
        Route::post('/download', 'Backend\CarrierController@download')->name('carriers.download');
    });

    Route::prefix ('departments')->group (function () {

        Route::get('/view', 'Backend\DepartmentController@view')->name('departments.view');
        Route::get('/add', 'Backend\DepartmentController@add')->name('departments.add');
        Route::post('/store', 'Backend\DepartmentController@store')->name('departments.store');
        Route::get('/edit/{id}', 'Backend\DepartmentController@edit')->name('departments.edit');
        Route::post('/update/{id}', 'Backend\DepartmentController@update')->name('departments.update');

    });

});
