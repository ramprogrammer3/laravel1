<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>query builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Users</h1>
                <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $id => $user )
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->age}}</td>
                                <td>{{$user->city}}</td>
                                <td>
                                    <a href="{{route('view.user',$user->id)}}" class="btn btn-primary btn-sm">View</a>
                                </td>
                                <td>
                                    <a href="{{route('view.delete',$user->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <td>
                                    <a href="{{route('update.page',$user->id)}}" class="btn btn-warning btn-sm">Update</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    
</body>
</html>