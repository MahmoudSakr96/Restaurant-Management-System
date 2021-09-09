<x-app-layout >

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/pubic">
        @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.navbar')
     <div class="container  mt-10">
        <form action="{{url('/updatefoodchef',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data->name}}" name="name" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Speciality</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data->speciality}}" name="speciality" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Old Image</label>
                <img src="/chefimage/{{$data->image}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">New Image</label>
                <input type="file" class="form-control" id="exampleFormControlInput1"  name="image" >
            </div>
            <div class="form-group">
                <input type="submit" value="Update Chef" class="btn btn-primary mb-2">
            </div>
            
            
          </form>
     </div>
    </div>
    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>