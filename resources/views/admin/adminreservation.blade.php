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
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Meassage</th> 
          </tr>
        </thead>
        <tbody>
          
          
          @foreach ($data as $data)
          <?php $x=1; ?>
          <tr>
            <th scope="row">{{$x}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->time}}</td>
            <td>{{$data->message}}</td>
          </tr>
          <?php $x+=1;?>
          
              
          @endforeach
          
        </tbody>
      </table>
     </div>
     
    </div>
    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>