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

Route::get('/', function () {
    return view('Login');
});
Route::get('/welcomeUpdated', function () {
    return view('welcomeUpdated');
});

//Route::resource('/pages/flightIndex','postsController');

//Route::get('/pages/flightIndex','postsController@ShowUserDistrict');
Route::get('/pages/LoggedOut','postsController@destroy');

Route::get('/pages/uRegister','postsController@RegisterPage');
Route::get('/pages/RegNotify','postsController@RegConfirm');
Route::get('/pages/RegFail','postsController@RegConfirm');


Route::get('/welcome','postsController@showHome');
Route::get('/LoggedInwelcome','postsController@verifyCredentials');

Route::get('/pages/flightIndex','postsController@ShowUserFlights');
Route::get('/pages/cityIndex','postsController@ShowCities');
Route::get('/welcomeUpdated','postsController@StoreTempDistrict');
Route::get('Location/{Locid}', 'postsController@show');
Route::get('flights/{Locid}', 'postsController@showFlightInfo');
Route::get('/pages/PaymentSuccess','postsController@confirmFlight');
Route::get('/pages/ShowTravels','postsController@userTravels');
Route::get('/pages/ShowHotelIndex','postsController@showHotels');
Route::get('hotels/{Locid}', 'postsController@showHotelInfo');


Route::get('/pages/ShowPopularHotels', 'postsController@ShowPopularHotel');
Route::get('/pages/ShowLocationHotels', 'postsController@ShowLocationHotel');
Route::get('/pages/PaymentSuccessHotel','postsController@confirmHotel');
Route::get('/pages/showHotels','postsController@userHotels');
Route::get('/pages/userPackage','postsController@ShowUserPackage');
Route::get('/pages/userPackageStats','postsController@ShowUserPackageStats');

Route::get('/pages/UserProfile','postsController@ShowUserProfile');
Route::get('/pages/userPurchaseInfo','postsController@ShowuserPurchaseInfo');







Route::get('/AdminWelcome','postsController@showAdminWelcome'); 
Route::get('/pages/AdminFlightIndex','postsController@ShowAdminFlightIndex');
Route::get('/pages/CreateNewFlight','postsController@ShowCreateNewFlight');
Route::get('/pages/CreateNotify','postsController@StoreNewFlight');
Route::get('/pages/DeleteSuccess','postsController@DeleteFlight');
Route::get('/pages/DeleteFailure','postsController@DeleteFlight');
Route::get('/pages/AdminFlightSearch','postsController@SearchAdminFlight');
Route::get('/pages/AdminSearchFlightSuccess','postsController@SearchFlightResults');
Route::get('/pages/AdminSearchFlightFailure','postsController@SearchFlightResults');
Route::get('/pages/AdminHotelIndex','postsController@ShowAdminHotelIndex');
Route::get('/pages/CreateNewHotel','postsController@ShowCreateNewHotel');
Route::get('/pages/CreateNotify2','postsController@StoreNewHotel');
Route::get('/pages/DeleteSuccess2','postsController@DeleteHotel');
Route::get('/pages/DeleteFailure2','postsController@DeleteHotel');
Route::get('/pages/AdminHotelSearch','postsController@SearchAdminHotel');
Route::get('/pages/AdminSearchHotelSuccess','postsController@SearchHotelResults');
Route::get('/pages/AdminSearchHotelFailure','postsController@SearchHotelResults');
Route::get('/pages/UserIndex','postsController@ShowAllUserIndex');
Route::get('/pages/AdminUserSearch','postsController@ShowAdminUserSearch');
Route::get('/pages/UserSearchResults','postsController@SearchUserResults');
Route::get('/pages/DeleteUserSuccess','postsController@DeleteUser');
Route::get('/pages/DeleteUserFailure','postsController@DeleteUser');
Route::get('/pages/AdminUserStats','postsController@ShowAdminUserStats');
Route::get('/pages/AdminUserStatsHotel','postsController@ShowAdminUserStatsHotel');


Route::get('/pages/AdminInbox','postsController@ShowAdminInbox');
Route::get('/pages/AdminMessageSent','postsController@SendAdminMessage');
Route::get('/pages/AdminMessageFail','postsController@SendAdminMessage');
Route::get('/pages/UserInbox','postsController@ShowUserInbox');
Route::get('/pages/UserMessageSuccess','postsController@SendUserMessage');
Route::get('/pages/UserMessageFail','postsController@SendUserMessage');























//Route::post('/welcomeUpdated', array('uses' => 'tempDistrictController@StoreTempDistrict'));
//Route::get('/flights/5305313','postsController@showIndDestLoc');


Route::resource('flights','postsController');