<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>

    <style type="text/css">
      label{
        display:inline-block;
        width:200px;
      }
    </style>
    <!-- plugins:css -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
     <div class="container-fluid page-body-wrapper">

     <div align="center" style="padding-top:100px;">
      <table>

      <tr style="background-color:black">
          <th style="padding:25px">Email</th>
          <th style="padding:25px">Phone</th>
          <th style="padding:25px">DoctorName</th>
          <th style="padding:25px">Date</th>
          <th style="padding:25px">Message</th>
          <th style="padding:25px">Status</th>
          <th style="padding:25px">Approve</th>
          <th style="padding:25px">Cancel</th>
          <th style="padding:25px">Send Mail</th>
      </tr>
       @foreach($data as $appoint)
      <tr align="center" style="background-color:skyblue;">
        <td>{{$appoint->email}}</td>
        <td>{{$appoint->phone}}</td>
        <td>{{$appoint->doctor}}</td>
        <td>{{$appoint->date}}</td>
        <td>{{$appoint->message}}</td>
        <td>{{$appoint->status}}</td>
        <td>
            <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
        </td>
        <td>

            <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Cancel</a>
        </td>

        <td>
            <a class="btn btn-success" href="{{url('email_view',$appoint->id)}}">SendMail</a>
        </td>
      </tr>
     
   @endforeach
      </table>
    </div>
     
    </div>
   
   @include('admin.script')
  </body>
</html>