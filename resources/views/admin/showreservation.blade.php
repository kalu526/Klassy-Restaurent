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
          <th style="padding:25px">Phone</th>
          <th style="padding:25px">NO Of Guest</th>
          <th style="padding:25px">Date</th>
          <th style="padding:25px">Time</th>
          <th style="padding:25px">Message</th>
         
      </tr>
       
@foreach($reserve as $reserves)
      <tr align="center" style="background-color:skyblue;">
        <td style="padding:25px">{{$reserves->name}}</td>
        <td style="padding:25px">{{$reserves->email}}</td>
        <td style="padding:25px">{{$reserves->phone}}</td>
        <td style="padding:25px">{{$reserves->guest}}</td>
        <td style="padding:25px">{{$reserves->date}}</td>
        <td style="padding:25px">{{$reserves->time}}</td>
        <td style="padding:25px">{{$reserves->desc}}</td>
       
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














