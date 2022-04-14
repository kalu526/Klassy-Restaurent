
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
            
          <div align="center" style="padding-top:100px;">
      @if(session()->has('message'))

      <div class="alert alert-success">
          {{session()->get('message')}}
          <button class="close" data-dismiss="alert">X</button>
      </div>
      @endif
      <table>

      <tr style="background-color:black">
          <th style="padding:25px">FoodName</th>
          <th style="padding:25px">Price</th>
          <th style="padding:25px">Description</th>
          <th style="padding:25px">Image</th>
          <th style="padding:25px">UpdateInfo</th>
          <th style="padding:25px">DeleteInfo</th>
      </tr>
       @foreach($food as $foods)
      <tr align="center" style="background-color:skyblue;">
        <td>{{$foods->title}}</td>
        <td>{{$foods->price}}</td>
        <td>{{$foods->desc}}</td>
        <td><img width="60px" height="60px" src="imagefile/{{$foods->image}}" style="border-radius:7px"></td>
        <td>
            <a class="btn btn-primary" href="{{url('updatefood',$foods->id)}}">Update</a>
        </td>
        <td>
            <a class="btn btn-danger" href="{{url('deletefood',$foods->id)}}" onclick="return confirm('Are You Sure You Want To Delete This Food Menu Permanently')">Delete</a>
        </td>
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




































