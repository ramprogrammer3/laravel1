

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="my-3 text-center">User Details</h3>
                @foreach ($data as $id => $user )
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td>{{$user->age}}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{$user->city}}</td>
                        </tr>
                    </table>
                @endforeach

                <a href="{{route('home')}}" class="btn btn-primary btn-sm">Go to Home page</a>
            </div>
        </div>
    </div>
</body>
</html>



