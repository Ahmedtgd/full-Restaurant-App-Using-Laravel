<?php

namespace App\Http\Controllers;
use App\Card;
use App\Customer;
use App\Order;
use App\Product;
use App\User;
use App\Vehicle;
use Illuminate\Http\Request;

class adminController extends Controller
{
  /**
   * Create a new controller instance.                 //copy past from  HomeController  ln9
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//////////////////////////////////////////////////////////////////////////////////////
public function admin()
{

  return view('adminVeiw.admin');
}
    public function vehicles()
    {
        $vehicles=Vehicle::all();
        $vehicles=Vehicle::paginate(5);
      return view('adminVeiw.vehicles', compact('vehicles'));
    }
    public function users()
    {
        $users=User::all();
        $users=User::paginate(5);
        return view('adminVeiw.user', compact('users'));
    }
    public function orders()
    {
        $orders=Order::all();
        $orders=Order::paginate(5);
        return view('adminVeiw.order', compact('orders'));
    }
    public function products()
    {
        $products=Product::all();
        $products=Product::paginate(5);
        return view('adminVeiw.product', compact('products'));
    }
    public function customers()
    {
        $customers=Customer::all();
        $customers=Customer::paginate(5);
      return view('adminVeiw.customer', compact('customers'));
    }
    public function cards()
    {
        $cards=Card::all();
        $cards = Card::paginate(5);
        return view('adminVeiw.card', compact('cards'));
    }
//////////////////////////////////Card///////////////////////////////////////////////////////
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function AddCard(Request $request){
 if($request->isMethod('post')){

   $this->validate($request,[
      'id' => 'required | max:5 |unique:cards' ,
    ///  'price' => 'required |min:2 |max:8'
    ]);

        $card = new Card();
        $card->id=$request->input('id');
        $card->quantity=$request->input('quantity');
        $card->status=$request->input('status');
        $card->pid=$request->input('pid');
        $card->cid=$request->input('cid');
        $card->save();
 }

                return view('adminVeiw.cardAdd');


 }



     public function EditCard(Request $request,$id){

     if($request->isMethod('post')){
     $cards= Card::find($id);
     $cards->id=$request->input('id');
     $cards->quantity=$request->input('quantity');
     $cards->status=$request->input('status');
     $cards->pid=$request->input('pid');
     $cards->cid=$request->input('cid');
            $cards->save();
            return redirect("cards");

     }else{
     $cards=Card::find($id);
     $arr=Array('cards'=>$cards);
     return view('adminVeiw.cardEdit',$arr);
     }

     }

///////////////////////////////Product////////////////////////////////////////////////


public function AddProduct(Request $request){
if($request->isMethod('post')){

$this->validate($request,[
 'id' => 'required | max:5 |unique:products' ,
///  'price' => 'required |min:2 |max:8'
]);

   $products = new Product();
   $products->id=$request->input('id');
   $products->name=$request->input('name');
   $products->description=$request->input('description');
   $products->price=$request->input('price');
   $products->file=$request->input('file');
   $products->fil=$request->input('fil');
   $products->save();
}

           return view('adminVeiw.productAdd');


}



public function EditProduct(Request $request,$id){

if($request->isMethod('post')){
$products= Product::find($id);
$products->id=$request->input('id');
$products->name=$request->input('name');
$products->description=$request->input('description');
$products->price=$request->input('price');
$products->file=$request->input('file');
$products->fil=$request->input('fil');
       $products->save();
       return redirect("products");

}else{
$products=Product::find($id);
$arr=Array('products'=>$products);
return view('adminVeiw.productEdit',$arr);
}

}
/////////////////////////////////Customer//////////////////////////////////////////////
public function AddCustomer(Request $request){
if($request->isMethod('post')){

$this->validate($request,[
 'id' => 'required | max:5 |unique:customers' ,
///  'price' => 'required |min:2 |max:8'
]);

   $customers = new Customer();
   $customers->id=$request->input('id');
   $customers->name=$request->input('name');
   $customers->email=$request->input('email');
   $customers->password=$request->input('password');
   $customers->phone=$request->input('phone');
   $customers->address=$request->input('address');
   $customers->save();
}

           return view('adminVeiw.customerAdd');


}



public function EditCustomer(Request $request,$id){

if($request->isMethod('post')){
$customers= Customer::find($id);
$customers->id=$request->input('id');
$customers->name=$request->input('name');
$customers->email=$request->input('email');
$customers->password=$request->input('password');
$customers->phone=$request->input('phone');
$customers->address=$request->input('address');
       $customers->save();
       return redirect("customers");

}else{
$customers=Customer::find($id);
$arr=Array('customers'=>$customers);
return view('adminVeiw.customerEdit',$arr);
}

}
/////////////////////////////////Vehicles//////////////////////////////////////////////

public function addVehicle(Request $request){
if($request->isMethod('post')){

$this->validate($request,[
 'id' => 'required | max:5 |unique:vehicles' ,
///  'price' => 'required |min:2 |max:8'
]);

   $vehicles = new Vehicle();
   $vehicles->id=$request->input('id');
   $vehicles->status=$request->input('status');
   $vehicles->vehicle_number=$request->input('vehicle_number');
   $vehicles->uid=$request->input('uid');
   $vehicles->oid=$request->input('oid');
   $vehicles->save();
}

           return view('adminVeiw.vehicleAdd');


}



public function EditVehicle(Request $request,$id){

if($request->isMethod('post')){
$vehicles= Vehicle::find($id);
$vehicles->id=$request->input('id');
$vehicles->status=$request->input('status');
$vehicles->vehicle_number=$request->input('vehicle_number');
$vehicles->uid=$request->input('uid');
$vehicles->oid=$request->input('oid');
       $vehicles->save();
       return redirect("vehicles");

}else{
$vehicles=Vehicle::find($id);
$arr=Array('vehicles'=>$vehicles);
return view('adminVeiw.vehicleEdit',$arr);
}

}
/////////////////////////////////Users//////////////////////////////////////////////

public function addUser(Request $request){
if($request->isMethod('post')){

$this->validate($request,[
 'id' => 'required | max:5 |unique:users' ,
///  'price' => 'required |min:2 |max:8'
]);

   $users = new User();
   $users->id=$request->input('id');
   $users->name=$request->input('name');
   $users->email=$request->input('email');
   $users->password=$request->input('password');
   $users->phone=$request->input('phone');
   $users->save();
}

           return view('adminVeiw.userAdd');


}



public function EditUser(Request $request,$id){

if($request->isMethod('post')){
$users= User::find($id);
$users->id=$request->input('id');
$users->name=$request->input('name');
$users->email=$request->input('email');
$users->password=$request->input('password');
$users->phone=$request->input('phone');
       $users->save();
       return redirect("users");

}else{
$users=User::find($id);
$arr=Array('users'=>$users);
return view('adminVeiw.userEdit',$arr);
}

}
/////////////////////////////////Orders//////////////////////////////////////////////

public function addOrder(Request $request){
if($request->isMethod('post')){

$this->validate($request,[
 'id' => 'required | max:5 |unique:orders' ,
///  'price' => 'required |min:2 |max:8'
]);

   $orders = new Order();
   $orders->id=$request->input('id');
   $orders->quantity=$request->input('quantity');
   $orders->deliveryStatus=$request->input('deliveryStatus');
   $orders->vehicle=$request->input('vehicle');
   $orders->cid=$request->input('cid');
   $orders->pid=$request->input('pid');
   $orders->uid=$request->input('uid');
   $orders->save();
}

           return view('adminVeiw.orderAdd');


}



public function EditOrder(Request $request,$id){

if($request->isMethod('post')){
$orders= Order::find($id);
$orders->id=$request->input('id');
$orders->quantity=$request->input('quantity');
$orders->deliveryStatus=$request->input('deliveryStatus');
$orders->vehicle=$request->input('vehicle');
$orders->cid=$request->input('cid');
$orders->pid=$request->input('pid');
$orders->uid=$request->input('uid');
       $orders->save();
       return redirect("orders");

}else{
$orders=Order::find($id);
$arr=Array('orders'=>$orders);
return view('adminVeiw.orderEdit',$arr);
}

}

}
