<section class="section" id="menu">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach ($data as $data)
                <form class="form-inline" action="{{url('/addcart',$data->id)}}" method="POST">
                    @csrf
                <div class="item">
                    <div style="background-image: url('/foodimage/{{$data->image}}')" class='card '>
                        <div class="price"><h6>{{$data->price}}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$data->title}}</h1>
                          <p class='description'>{{$data->description}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                         
                        
                        </div>
                        
                    </div>
                    
                    
                    <div class="row ">
                        <div class="col">
                          <input type="number" min="1"  value="1" class="p-2 bg-light text-dark " name="quantity" id="inputPassword2" style="width: 150px; height: 38px;" >
                        </div>
                        <div class="col">
                          <button type="submit" class="btn btn-primary ">Add cart</button>
                        </div>
                        
                    </div>
                      
                </div>
                
            </form>
                @endforeach
            </div>
        </div>
    </div>
</section>