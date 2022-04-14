<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::id()){
            return redirect('home');
        }
        else{
        $food=Food::all();
        $chef=Chef::all();
       return view('home')->with(["food"=>$food,"chef"=>$chef]);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::id()){
            if(Auth::user()->usertype==0){
                $food=Food::all();
                $chef=Chef::all();
                $user_id=Auth::id();
                $count=Cart::where('user_id',$user_id)->count();
                return view('home',compact("food","chef","count"));
            }
            elseif(Auth::user()->usertype==1){
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reservation(Request $request)
    {
        $reserve=new Reservation;
        
        $reserve->name=$request->name;
        $reserve->email=$request->email;
        $reserve->phone=$request->phone;
        $reserve->guest=$request->guest;
        $reserve->date=$request->date;
        $reserve->time=$request->time;
        $reserve->desc=$request->desc;

        $reserve->save();

        return redirect()->back()->with('message','You Have Successfully Reserve Your Table');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addcart(Request $request ,$id)
    {
        if(Auth::id()){
          $user_id=Auth::id();
          $food_id=$id;
          $cart=new Cart;

          $cart->user_id=$user_id;
          $cart->food_id=$food_id;
          $cart->quantity=$request->quantity;

          $cart->save();
           
          
            return redirect()->back()->with('message','Your Operation is Successfull');
        }
        else{

            
            return redirect('/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showcart($id)
    {
        if(Auth::user()->id==$id){
        $user_id=Auth::id();
       
        $count=Cart::where('user_id',$user_id)->count();
       $data=Cart::select('*')->where('user_id', '=',$id)->get();
        $food=Cart::where('user_id',$id)->join('food','carts.food_id', '=' ,'food.id')->get();
        return view('showcart',compact('count','data','food','data'));
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove( $id)
    {
        $data=Cart::find($id);
        $data->delete();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmorder(Request $request)
    {
        foreach($request->foodname as $key=>$foodname){
            $order=new Order;

            $order->foodname=$foodname;
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];
            $order->image=$request->image[$key];

            $order->name=$request->name;
            $order->phone=$request->phone;
            $order->address=$request->address;

            $order->save();
        }
        return redirect()->back()->with('message','You Have Successfully Order Your Food');
    }



    public function search(Request $request)
    {
      $search=$request->name;
      $food=Food::where('title','Like','%'.$search.'%')
      ->orWhere('price','Like','%'.$search.'%')->get();
      
      return view('menu',compact('food'));
    }

    public function filter(Request $request)
    {
        $price=Food::all()->price;
    $filtered=Food::filter(function($price){
       return $price >100;
    });
    return view('home',compact('filtered'));
    }
}
