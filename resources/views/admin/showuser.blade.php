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
          <th style="padding:25px">Name</th>
          <th style="padding:25px">Email</th>
          <th style="padding:25px">Action</th>
         
      </tr>
       
@foreach($data as $datas)
      <tr align="center" style="background-color:skyblue;">
        <td style="padding:25px">{{$datas->name}}</td>
        <td style="padding:25px">{{$datas->email}}</td>
        @if($datas->usertype=="0")
        <td style="padding:25px"><a href="{{url('/deleteuser',$datas->id)}}"><button class="btn btn-danger">Delete</button></td></a>
       
       @else
       <th style="padding:25px ;color:#ff0000">Not Allowed</th>
      @endif
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














