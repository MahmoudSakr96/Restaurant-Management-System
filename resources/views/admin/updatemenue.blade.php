<x-app-layout >

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
        @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.navbar')
     <div class="container  mt-10 ">
        <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Food Title" name="title" value="{{$data->title}}" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">price</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Food Price" name="price"value="{{$data->price}}" required>
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlFile1">Old Image</label>
                <img style="height: 200px; width: 200px;" src="/foodimage/{{$data->image}}">
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlInput1">Description</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Food Description" name="description"value="{{$data->description}}" required>
              </div>
              <div class="form-group">
                <input type="submit" value="Submit"  class="btn btn-primary">
              </div>
              

          </form>
     </div>
    </div>
    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>