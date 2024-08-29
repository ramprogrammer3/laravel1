<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Add New User</h3>
                <form action="{{route('add')}}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Age</label>
                        <input type="text" class="form-control" name="age">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">City</label>
                        <input type="text" class="form-control" name="city">
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>