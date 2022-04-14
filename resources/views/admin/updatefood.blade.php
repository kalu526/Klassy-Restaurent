<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <base href="/public"/>
    <!-- plugins:css -->
    @include('Admin.css')
  </head>
  <body>
    <div class="container-scroller">
     


     
@include('Admin.sidebar')





      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

       


      @include('Admin.navbar')



        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
          <div align="center" style="padding-top:100px">
      @if(session()->has('message'))

<div class="alert alert-success">
{{session()->get('message')}}
<button class="close" data-dismiss="alert" >X</button>
</div>
@endif

<h2 style="font-size:27px;margin-bottom:10px;"><span style="color:#00cc7a">Add Food's  </span>Menu</h2>
      <form action="{{url('editfood',$food->id)}}" method="POST" enctype="multipart/form-data">
     @csrf

        <div style="padding:15px">
          <label for="title">Food Name</label>
          <input type="text" name="title" placeholder="Type Doctor Name" style="color:black" required value={{$food->title}}>
        </div>

        <div style="padding:15px">
          <label for="price">price</label>
          <input type="number" name="price" placeholder="Type price" style="color:black" required value={{$food->price}}>
        </div>

       

        <div style="padding:15px">
          <label for="desc">description</label>
          <textarea type="text" name="desc" placeholder="Type desc" style="color:black" required >{{$food->desc}}</textarea>
        </div>

        <div style="padding:15px">
          <label for="foodimage" style="display:inline-block;width:200px">Old Food Image</label>
         <img width="50px" height="50px" src="imagefile/{{$food->image}}" alt="">
        </div>

        <div style="padding:15px">
          <label for="foodimage">change Image</label>
          <input type="file" name="file" required>
        </div>

        <div style="padding:15px">
          
          <input type="submit" class="btn btn-success" placeholder="Submit">
        </div>

      </form>

      </div>
           
           
           
           
           
          </div>
          
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
   
  </body>
</html>