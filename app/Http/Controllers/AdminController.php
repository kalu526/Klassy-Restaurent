<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Order;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $data=User::all();

        return view('Admin.showuser',compact('data'));
    }


    public function deleteuser($id)
    {
        $data=User::find($id);

        $data->delete();
        return redirect()->back()->with('message','Delete Operation Completed Successfully');
    }


    public function foodmenu()
    {
      
        return view('Admin.foodmenu');
    }


    public function showfoodmenu()
    {
         $food=Food::all();
        return view('Admin.showfoodmenu',compact('food'));
    }


    public function uploadmenu(Request $request)
    {
      $food=new Food;
      $image=$request->file;

      $imagename=time(). '.' .$image->getClientOriginalExtension();

      $request->file->move('imagefile',$imagename);


      $food->image=$imagename;

      $food->title=$request->title;
      $food->price=$request->price;
      $food->desc=$request->desc;

      $food->save();

      return redirect()->back()->with('message','Add Food Menu Operation Completed Successfully');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deletefood($id)
    {
       $food=Food::find($id);

       $food->delete();

       return redirect()->back()->with('message','You Have Deleted One Food Menu Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatefood($id)

    {
      $food=Food::find($id);
        return view('Admin.updatefood',compact('food'));
    }

    public function editfood(Request $request,$id)

    {
        $food=Food::find($id);

        $food->title=$request->title;
        $food->price=$request->price;
        $food->desc=$request->desc;
        
        $image=$request->file;
   if($image){
    // get the image name
    $imagename=time().'.' .$image->getClientOriginalExtension();
    // store the image file in the folder
     $request->file->move('imagefile',$imagename);

    //  set the image name for foodbase
     $food->image=$imagename;
   }
        $food->save();
        return redirect()->back()->with('message','The food Information Updated Successfully');

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showreservation()
    {   
         $reserve=Reservation::all();
        return view('Admin.showreservation',compact('reserve'));
    }


    public function addchef()
    {   
         
        return view('Admin.Addchef');
    }

    public function uploadchef(Request $request)
    {   
         $chef=new Chef;


         $image=$request->file;

         $imagename=time(). '.' .$image->getClientOriginalExtension();
   
         $request->file->move('imagefile',$imagename);
   
   
         $chef->image=$imagename;

        
         $chef->name=$request->name;
         $chef->speciality=$request->speciality;
         $chef->fb=$request->fb;
         $chef->twitter=$request->twitter;
         $chef->insta=$request->insta;

         $chef->save();

         return redirect()->back()->with('message','you Have Successfully Added Chef Into Database');
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showchef()
    {
        $chef=Chef::all();
       return view('Admin.showchef',compact('chef'));
    }

    public function deletechef($id)
    {
        $chef=Chef::find($id);
       $chef->delete();

       return redirect()->back()->with('message','You Have Successfully Deleted Chef Information');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatechef($id)
    {
        $chef=Chef::find($id);
        return view('Admin.updatechef',compact('chef'));
    }



    public function editchef(Request $request,$id)

    {
        $chef=Chef::find($id);

        $chef->name=$request->name;
        $chef->speciality=$request->speciality;
        $chef->fb=$request->fb;
        $chef->twitter=$request->twitter;
        $chef->insta=$request->insta;
        
        $image=$request->file;
   if($image){
    // get the image name
    $imagename=time().'.' .$image->getClientOriginalExtension();
    // store the image file in the folder
     $request->file->move('imagefile',$imagename);

    //  set the image name for foodbase
     $chef->image=$imagename;
   }
        $chef->save();
        return redirect()->back()->with('message','The Chef Information Updated Successfully');

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showorder()
    {
      $order=Order::all();
      
      return view('Admin.showorder',compact('order'));
    }

    public function search(Request $request)
    {
      $search=$request->name;
      $order=Order::where('name','Like','%'.$search.'%')
      ->orWhere('quantity','Like','%'.$search.'%')
      ->orWhere('foodname','Like','%'.$search.'%')
      ->orWhere('address','Like','%'.$search.'%')
      ->orWhere('price','Like','%'.$search.'%')->get();
     
        return view('Admin.showorder',compact('order'));
      
     
   
    }
}
