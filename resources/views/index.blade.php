

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-dark p-2 text-white text-center">ORM CRUD OPERATION</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-5">

                <form action="{{url('/insert')}}" method="post">
                    @csrf
                <input type="text" name="stname" class="form-control" placeholder="Enter Name">
                <input type="email" name="stemail" class="form-control" placeholder="Enter email">
                <input type="text" name="stdept" class="form-control" placeholder="Enter dept">

                <button class="btn btn-primary">Submit</button>

                </form>

            </div>
            <div class="col-lg-7">

                <table class="table table-dark table-striped">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Dept</th>
                    <th>edit</th>
                    <th>Delete</th>

                    <tbody>
                       @foreach ($select as $item)

                       <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->dept}}</td>
                        <td><a href="{{url('/edit/'.$item->id)}}"><button class="btn btn-success">edit</button></a></td>
                        <td><a href="{{url('/delete/'.$item->id)}}"><button class="btn btn-warning">delete</button></a></td>
                    </tr>
                           
                       @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>