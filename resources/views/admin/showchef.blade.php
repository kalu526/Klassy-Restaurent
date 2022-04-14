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

      <tr style="background-color:#e600e6">
          <th style="padding:15px">Name</th>
          <th style="padding:15px">Speciality</th>
          <th style="padding:15px">FaceBook Link</th>
          <th style="padding:15px">Twitter Link</th>
          <th style="padding:15px">Instagram Link</th>
          <th style="padding:15px">Image</th>
          <th style="padding:15px">Update Chef</th>
          <th style="padding:15px">Delete Chef</th>
         
         
      </tr>
       
@foreach($chef as $chefs)
      <tr align="center" style="background-color:skyblue;">
        <td style="padding:15px">{{$chefs->name}}</td>
        <td style="padding:15px">{{$chefs->speciality}}</td>
        <td style="padding:15px">{{$chefs->fb}}</td>
        <td style="padding:15px">{{$chefs->twitter}}</td>
        <td style="padding:15px">{{$chefs->insta}}</td>
        <td style="padding:15px"><img width="30px" height="30px" src="imagefile/{{$chefs->image}}" alt=""></td>
       

        <td>
            <a class="btn btn-primary" href="{{url('updatechef',$chefs->id)}}">Update</a>
        </td>

        <td>
            <a class="btn btn-danger" href="{{url('deletechef',$chefs->id)}}" onclick="return confirm('Are You Sure You Want To Delete This Chef Permanently')">Delete</a>
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














