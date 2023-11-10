

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

                <form action="{{url('/update/'.$select->id)}}" method="post">
                    @csrf
                <input value="{{$select->name}}" type="text" name="stname" class="form-control" placeholder="Enter Name">
                <input value="{{$select->email}}" type="email" name="stemail" class="form-control" placeholder="Enter email">
                <input value="{{$select->dept}}" type="text" name="stdept" class="form-control" placeholder="Enter dept">

                <button class="btn btn-primary">Update</button>

                </form>

            </div>
            <div class="col-lg-7">

               

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>