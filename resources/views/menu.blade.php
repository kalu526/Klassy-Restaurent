<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of Delicies Foods with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">


           
            @if(session()->has('message'))
      <div class="alert alert-success">
      
      {{session()->get('message')}}
      <button type="button" class="close" data-dismiss="alert">X</button>
      </div>
      
      @endif 
                <div class="owl-menu-item owl-carousel">
               
                    @foreach($food as $foods)
                   
                    <form action="{{url('addcart',$foods->id)}}" method="post">
                        @csrf
                 
                    <div class="item">
                        <div style="background-image:url('imagefile/{{$foods->image}}')"class='card '>
                            <div class="price"><h6>{{$foods->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$foods->title}}</h1>
                              <p class='description'>{{$foods->desc}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>

                        <input type="number" name="quantity" min="1" style="width:80px; outline:none" value="1" >
                       <button type="submit" class="btn btn-success"> AddToCart</button>
                    </div>
                    </form>
                    @endforeach

                   
                </div>
            </div>
        </div>
    </section>