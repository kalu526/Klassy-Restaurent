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

<h2 style="font-size:27px;margin-bottom:10px;"><span style="color:#00cc7a">Update </span>Chef</h2>
      <form action="{{url('editchef',$chef->id)}}" method="POST" enctype="multipart/form-data">
     @csrf

        <div style="padding:15px">
          <label for="name">Chef's Name</label>
          <input type="text" name="name" placeholder="Type Doctor Name" style="color:black" required value={{$chef->name}}>
        </div>

        <div style="padding:15px">
          <label for="speciality">speciality</label>
          <input type="text" name="speciality" placeholder="Type speciality" style="color:black" required value={{$chef->speciality}}>
        </div>

       

        <div style="padding:15px">
          <label for="fb">FaceBook Link</label>
          <input type="text" name="fb" placeholder="Type fb" style="color:black" required value={{$chef->fb}} >
        </div>

        <div style="padding:15px">
          <label for="twitter">Twitter Link</label>
          <input type="text" name="twitter" placeholder="Type twitter" style="color:black" required value={{$chef->twitter}}>
        </div>

        <div style="padding:15px">
          <label for="insta">Instagram Link</label>
          <input type="text" name="insta" placeholder="Type insta" style="color:black" required value={{$chef->insta}}>
        </div>


        <div style="padding:15px">
          <label for="chefimage" style="display:inline-block;width:200px">Old Chef's Image</label>
         <img width="50px" height="50px" src="imagefile/{{$chef->image}}" alt="">
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