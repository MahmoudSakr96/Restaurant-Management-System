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
        <form action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter name" name="name" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Speciality</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the speciality" name="speciality" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Image</label>
                <input type="file" class="form-control" id="exampleFormControlInput1"  name="image" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary mb-2">
            </div>
            
            
          </form>
        <hr>
          <blockquote class="blockquote text-center" style="background-color: rgb(60, 59, 107);">
            <h1 class="mb-0" style="color: rgb(194, 81, 81);">Chefs Information.</h1>
            
          </blockquote>
         
     
     <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Chefname</th>
            <th scope="col">speciality</th>
            <th scope="col">image</th>
            <th scope="col">Action1</th>
            <th scope="col">Action2</th>
          </tr>
        </thead>
        <?php $x=1 ?>
        @foreach ($data as $data)

        <tbody>
            <tr>
              <th scope="row">{{$x}}</th>
              <td><h1>{{$data->name}}</h1></td>
              <td><h1>{{$data->speciality}}</h1></td>
              <td><img style="width: 100px; height: 100px;"  src="/chefimage/{{$data->image}}"></td>
              <td><a href="{{url('/updatechef',$data->id)}}"class="btn btn-primary">Update</a></td>
              <td><a href="{{url('/deletechef',$data->id)}}"class="btn btn-danger">Delete</a></td>
            </tr>
           
        </tbody>
        <?php $x+=1 ?>
            
        @endforeach
        
      </table>
    </div>
  </div>
    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>