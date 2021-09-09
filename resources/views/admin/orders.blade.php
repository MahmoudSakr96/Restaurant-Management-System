<x-app-layout >

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
        @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.navbar')
     <div class="container mt-10">

        <div class="container "  >
            <div class="row col-12 justify-content-center" >
                <form role="search" class="form-inline" action="{{url('/search')}}" method="GET">
                    <div class="input-group-prepend">
                     <input type="search" name="search" class="form-control" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off" data-docs-version="4.6">
                    </div>
                    <button type="submit" class="form-control btn btn-sucess">Search</button>

                </form>
            </div>
        </div>
     
          
     <div class="container mt-10">
     <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Food Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total Price</th>
          </tr>
        </thead>
        <tbody>
            <?php $x=1; ?>
            @foreach ($data as $data)
            <tr>
                <th scope="row">{{$x}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->foodname}}</td>
                <td>{{$data->price}}$</td>
                <td>{{$data->quantity}}</td>
                <td>{{$data->price * $data->quantity}}</td>
                
              </tr>
              <?php $x+=1; ?>
                
            @endforeach
          
         
        </tbody>
      </table>
    </div>
     </div>
</div>
    <!-- container-scroller -->

    @include('admin.adminscript')
  </body>
</html>