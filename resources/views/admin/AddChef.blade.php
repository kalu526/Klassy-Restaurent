<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
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
            
           
          <div class="container" align="center" style="padding-top:100px">
      @if(session()->has('message'))
      <div class="alert alert-success">
      
      {{session()->get('message')}}
      <button type="button" class="close" data-dismiss="alert">X</button>
      </div>
      
      @endif 
      <h2 style="font-size:27px;margin-bottom:10px;"><span style="color:#00cc7a">Add </span>Chef</h2> 
      <form action="{{url('uploadchef')}}" method="POST" enctype="multipart/form-data">
     @csrf

        <div style="padding:15px">
          <label for="name">Chef's Name</label>
          <input type="text" name="name" placeholder="Type Chef's Name" style="color:black" required>
        </div>

        <div style="padding:15px">
          <label for="speciality">speciality</label>
          <input type="text" name="speciality" placeholder="Type speciality" style="color:black" required>
        </div>
        
        <div style="padding:15px">
          <label for="facebook Link">Facebook Link</label>
          <input type="text" name="fb" placeholder="Drop Facebook Link Here" style="color:black" required>
        </div>

        <div style="padding:15px">
          <label for="twitter">Twitter Link</label>
          <input type="text" name="twitter" placeholder="Drop twitter Link Here " style="color:black" required>
        </div>


        <div style="padding:15px">
          <label for="insta">Instagram</label>
          <input type="text" name="insta" placeholder="Drop Instagram Link Here" style="color:black" required>
        </div>


        <div style="padding:15px">
          <label for="image">Chef's Image</label>
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