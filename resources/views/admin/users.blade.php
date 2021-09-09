
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
             <div class="container ">
                <table class="table table-striped table-dark mt-10">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $x=1; ?>
                    @foreach ($data as $data)
                    
                    <tr>
                        <th scope="row">{{$x}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        @if ($data->usertype =='0')
                        <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>                           
                        @else
                        <td><a href=""> Not Allowed</a></td>
                            
                      
                            
                        @endif
                        
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
