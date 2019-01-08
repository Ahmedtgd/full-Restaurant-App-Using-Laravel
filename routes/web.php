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
/////////////////////////////////
use App\Card;
use App\Customer;
use App\Order;
use App\Product;
use App\User;
use App\Vehicle;
////////////////////////////////
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'adminController@users');
Route::get('/orders', 'adminController@orders');
Route::get('/admin', 'adminController@admin');

///////////////////////card/////////////////////////
Route::get('/cards', 'adminController@cards');
Route::get('cardAdd/{id}',function ($id){
$cards=Card::find($id);
$cards->delete();
return redirect("cards");
});
Route::post('cardAdd',"adminController@AddCard");
Route::get('cardAdd',"adminController@AddCard");

Route::get('cardEdit/{id}',"adminController@EditCard");
Route::post('cardEdit/{id}',"adminController@EditCard");
////////////////////////products////////////////////////////////
Route::get('/products', 'adminController@products');
Route::get('productAdd/{id}',function ($id){
$products=Product::find($id);
$products->delete();
return redirect("products");
});
Route::post('productAdd',"adminController@AddProduct");
Route::get('productAdd',"adminController@AddProduct");

Route::get('productEdit/{id}',"adminController@EditProduct");
Route::post('productEdit/{id}',"adminController@EditProduct");
////////////////////////customers///////////////////////////////////
Route::get('/customers', 'adminController@customers');
Route::get('customerAdd/{id}',function ($id){
$customers=Customer::find($id);
$customers->delete();
return redirect("customers");
});
Route::post('customerAdd',"adminController@AddCustomer");
Route::get('customerAdd',"adminController@AddCustomer");

Route::get('customerEdit/{id}',"adminController@EditCustomer");
Route::post('customerEdit/{id}',"adminController@EditCustomer");
////////////////////////vehicles///////////////////////////////////
Route::get('/vehicles','adminController@vehicles');
Route::get('vehicleDelete/{id}',function ($id){
$vehicles=Vehicle::find($id);
$vehicles->delete();
return redirect("vehicles");
});
Route::post('vehicleAdd',"adminController@addVehicle");
Route::get('vehicleAdd',"adminController@addVehicle");

Route::get('vehicleEdit/{id}',"adminController@EditVehicle");
Route::post('vehicleEdit/{id}',"adminController@EditVehicle");
/////////////////////////Users//////////////////////////
Route::get('/users','adminController@users');
Route::get('userDelete/{id}',function ($id){
$users=User::find($id);
$users->delete();
return redirect("users");
});
Route::post('userAdd',"adminController@addUser");
Route::get('userAdd',"adminController@addUser");

Route::get('userEdit/{id}',"adminController@EditUser");
Route::post('userEdit/{id}',"adminController@EditUser");

/////////////////////////Orders//////////////////////////
Route::get('/orders','adminController@orders');
Route::get('orderDelete/{id}',function ($id){
$orders=Order::find($id);
$orders->delete();
return redirect("orders");
});
Route::post('orderAdd',"adminController@addOrder");
Route::get('orderAdd',"adminController@addOrder");

Route::get('orderEdit/{id}',"adminController@EditOrder");
Route::post('orderEdit/{id}',"adminController@EditOrder");
///////////////////////////////////////////////////////////
/*
factory(App\User::class,5)->create();

factory(App\Product::class,5)->create();

factory(App\Customer::class,5)->create();

factory(App\Card::class,5)->create();

factory(App\Order::class,5)->create();

factory(App\Vehicle::class,5)->create();
*/
