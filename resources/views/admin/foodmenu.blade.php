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
     <div class="container mt-10 ">
        <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Food Title" name="title" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">price</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Food Price" name="price" required>
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlInput1">Description</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Food Description" name="description" required>
              </div>
              <div class="form-group">
                <input type="submit" value="Submit"  class="btn btn-primary">
              </div>
              

          </form>
          <hr>
        
        <blockquote class="blockquote text-center" style="background-color: rgb(60, 59, 107);">
          <h1 class="mb-0" style="color: rgb(194, 81, 81);">Food Information.</h1>
          
        </blockquote>
          <div class=".d-flex " >
            <table class="table table-striped table-dark ">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Food Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    <th scope="col">Action2</th>
                </tr>
                </thead>
                <tbody>
                    <?php $x=1; ?>
                @foreach ($data as $data)
                
                <tr>
                    <th scope="row"><h1>{{$x}}</h1></th>
                    
                    <td><h1>{{$data->title}}</h1></td>
                    
                    <td><h1>{{$data->price}}$</h1></td>                           
                    
                    <td><h1>{{$data->description}}</h1></td>
                    <td><div class="text-center ">
                      <img src="/foodimage/{{$data->image}}" style="width: 100px; height: 100px; alt="...">
                    </div>
                  </td>
                  <td><a href="{{url('/deletemenu',$data->id)}}"class="btn btn-primary">Delete</a></td>
                  <td><a href="{{url('/updatemenue',$data->id)}}"class="btn btn-danger">Update</a></td>
                        
                  
                        
                    
                </tr>
                
                <?php $x+=1;?>
                    
                @endforeach
                
               
                </tbody>
            </table>
         </div>
      </div>

     </div>
    </div>

    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>