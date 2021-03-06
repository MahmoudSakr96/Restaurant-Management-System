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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
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
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li class="scroll-to-section">
                                @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}" class="btn btn-primary">
                                Cart  <span class="badge badge-light">{{$count}}</span>
                                @endauth
                                @guest
                                Cart  
                                @endguest
                                
                            
                            
                            
                            </a></li> 
                            

                            <li>
                                 @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                           <li> 
                                            <x-app-layout>

                                            </x-app-layout>
                                           </li>
                                        @else
                                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
                    
                                            @if (Route::has('register'))
                                            <li>  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </li>
                        </ul>        
                       <!-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> -->
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="top"  class="d-flex justify-content-center">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Food Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            
          </tr>
        </thead>
        <tbody>
            <form action="{{url('orderconfirm')}}" method="POST">
                @csrf
            <?php $x=1;?>
            @foreach ($data as $data)
            
            <tr>
                <th scope="row">{{$x}}</th>
                <td>
                    <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                    {{$data->title}}
                </td>
                <td>
                    <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                    {{$data->price}}
                </td>
                <td>
                    <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                    {{$data->quantity}}
                </td>
                
              </tr>
              <?php $x+=1;?>
                
            @endforeach
            
            
          
          
        </tbody>
      </table><table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($data2 as $data2)
            <tr >
            <td><a href="{{url('/remove',$data2->id)}}"class="btn btn-danger">Delete</a></td>
            </tr>
                
            @endforeach
          
        </tbody>
      </table>
      

      
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" id="order" class="btn btn-primary">Order Now</button>
    </div>
    <div style="display: none;" id="appear">
        <div style=" display: none;" class="d-flex justify-content-center mt-10"  >
            <div>
            <div class="form-group row">
                <label for="exampleInputEmail1">Name</label>
                
                <input type="text" name="name" placeholder="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group row">
                <label for="exampleInputEmail1">Phone</label>
                <input type="number" name="phone" placeholder="Phone Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group row">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" name="address" placeholder="Adress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group row">
                <button  type="submit" class="btn btn-primary">Order Now</button>
                <button type="button" id="close" class="btn btn-danger  ">Close</button>
            </div>
            <div>
        </div>
    </div>
</form>
    



<script type="text/javascript">


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
  </body>
</html>