<!DOCTYPE html>
<html lang="en">

  <head>
  <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('home')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('home')}}">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="{{url('home')}}">Menu</a></li>
                            <li class="scroll-to-section"><a href="{{url('home')}}">Chefs</a></li> 
                           
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="{{url('home')}}">Contact Us</a></li> 



                            <li class="scroll-to-section">

                            @auth
                                <a href="{{url('showcart',Auth::user()->id)}}" style="background-color: #ff33ff;color:white;width:70px;border-radius:4px">
                                <span style="padding:3px">
                                Cart[{{$count}}]
                                </span>
                                </a>
                                @endauth

                                @guest
                                <a href="" style="background-color: #ff33ff;color:white;width:70px;border-radius:4px">
                                <span style="padding:3px">
                                Cart[0]
                                </span>
                                 </a>
                                @endguest
                            
                            </li> 



                             <li>
                                 
                            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <li>

                        <x-app-layout>
  
                        </x-app-layout>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                            
</li>

                        </ul>        
                      
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    

    <div id="top" align="center" style="padding:150px;">
     <table style="width:80%">
         
         <tr style="background-color:#00e6e6;">
             <th style="padding:20px;color:white;font-size:20px">FoodName</th>
             <th style="padding:20px;color:white;font-size:20px">Price</th>
             <th style="padding:20px;color:white;font-size:20px">Quantity</th>
             <th style="padding:20px;color:white;font-size:20px">FoodImage</th>
             

         </tr>
         <form action="confirmorder" method="POST">
             @csrf
         @foreach($food as $foods)
         <tr style="background-color: #d9d9d9;">
             
             <td style="padding:20px;color:#595959;">
             <input type="text" name="foodname[]" value={{$foods->title}} hidden>
             {{$foods->title}}
            </td>

             <td style="padding:20px;color:#595959;">
             <input type="number" name="price[]" value={{$foods->price}} hidden>
             {{$foods->price}}
            </td>

             <td style="padding:20px;color:#595959;">
             {{$foods->quantity}}
             <input type="number" name="quantity[]" value={{$foods->quantity}} hidden>
            </td>

             <td style="padding:20px;color:#595959;">
             <input type="text" name="image[]" value={{$foods->image}} hidden>
             <img  style="border-radius:50%" width="30px" height="30px"src="imagefile/{{$foods->image}}" alt="">
            </td>
            
         </tr>
        @endforeach

      @foreach($data as $datas)
         
         <td style="padding:20px;color:#595959;"><a href="{{url('remove',$datas->id)}}" class="btn btn-danger">Remove</a></td>
       
      @endforeach
     </table>

     <div align="center">
      <button id="order" type="button" class="btn btn-primary" style="width:100px;height:50px">OrderNow</button>
     </div>

     <div id="appear" align="center" style="margin:15px;display:none;background-color:#9999ff;width:30%;color:white ;border-radius:10px"  >
           <h2 style="padding-top:10px;font-size:24px;font-weight:500">Order Your Food Here</h2>
      <div style="padding:10px;" style="display:flex;align-items:center">
          <label for="name" style="padding:7px">Name</label>
          <input type="text" name="name" placeholder="Name" style="outline:none" required>
      </div>

      <div style="padding:10px;" style="display:flex;align-items:center">
          <label for="phone" style="padding:7px">Phone</label>
          <input type="text" name="phone" placeholder="Phone" style="outline:none" required>
      </div>

      <div style="padding:10px;" style="display:flex;align-items:center">
          <label for="address" style="padding:7px">Address</label>
          <input type="text" name="address" placeholder="Address" required >
      </div>


      <div style="padding:10px;">
         
      <button class="btn btn-success" type="submit" style="width:120px;height:50px">ConfirmOrder</button>
      <button id="close" type="button" class="btn btn-danger">Close</button>

      @if(session()->has('message'))
                               <div class="alert alert-success">
                                   {{session()->get('message')}}
                                   <button class="close" data-dismiss="alert">X</button>
                               </div>
                              @endif
      </div>

     </div>


 </div>

 </form>








    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>


            <script>
             
                 $("#order").click(
                  function(){
                      $("#appear").show();
                  }
                 );

                 $("#close").click(
                  function(){
                      $("#appear").hide();
                  }
                 );
             


            </script>
  </body>
</html>