<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <a href="/addStudent" class="btn btn-success">Add Student</a>
                    </div>

                    <div class="card-body">
                    @if(Session::has('message'))
                          <div class="alert alert-success" role="alert">
                              {{Session::get('message')}}
                          </div>
                          @endif
                      <table class="table table-striped">
                       <thead>
                           <tr>
                             <th>ID</th> 
                             <th>Student Name</th>
                             <th>Student Description</th> 
                             <th>Action</th>     
                           </tr>
                        <thead>
                            <tbody>
                                @foreach($students as $s)
                                <tr>
                                    <td>{{$s->id}}</td>
                                    <td>{{$s->name}}</td>
                                    <td>{{$s->description}}</td>
                                    <td>
                                     <a href="#" class="btn btn-success">Update</a>
                                     <a href="/studentDelete/{{$s->id}}" class="btn btn-danger">Delete</a>
                                     </td>

                                </tr>
                                @endforeach
                            </tbody>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </section>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>