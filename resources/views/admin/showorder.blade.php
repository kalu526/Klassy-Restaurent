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
          
          <form action="search" method="GET">
              <input type="text" placeholder="Search order by name" style="color:black" name="name">
              <button type="submit" class="btn btn-sucecss">Search</button>
          </form>


          <div align="center" style="padding-top:100px;">
              @if(session()->has('message'))
              <div class="alert alert-success">
                {{session()->get('message')}}
                <button class="btn btn-danger" data-dismiss="alert">X</button>
              </div>
              @endif
      <table>

      <tr style="background-color:#e600e6">
          <th style="padding:15px">Name</th>
          <th style="padding:15px">Phone</th>
          <th style="padding:15px">Address</th>
          <th style="padding:15px">FoodName</th>
          <th style="padding:15px">FoodImage</th>
          <th style="padding:15px">Price</th>
          <th style="padding:15px">Quantity</th>
          <th style="padding:15px">TotalPrice</th>
         
         
      </tr>
       
@foreach($order as $orders)
      <tr align="center" style="background-color:skyblue;">
        <td style="padding:15px">{{$orders->name}}</td>
        <td style="padding:15px">{{$orders->phone}}</td>
        <td style="padding:15px">{{$orders->address}}</td>
        <td style="padding:15px">{{$orders->foodname}}</td>
        <td style="padding:15px"><img width="30px" height="30px" src="imagefile/{{$orders->image}}" alt=""></td>
        <td style="padding:15px">{{$orders->price}}</td>
        <td style="padding:15px">{{$orders->quantity}}</td>
        <td style="padding:15px">{{$orders->quantity*$orders->price}}</td>
      
       
      </tr>
     @endforeach

      </table>
    </div>
           
           
           
           
           
          </div>
          
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
   
  </body>
</html>














