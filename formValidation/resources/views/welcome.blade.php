<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="my-3">Add New User</h3>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('addUser') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control @error('age') is-invalid @enderror"
                                    name="age" value="{{ old('age') }}">
                                <span class="text-danger">
                                    @error('age')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" value="{{ old('password') }}">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <select name="city" class="form-select @error('city') is-invalid @enderror">
                                    <option value="Noida">Noida</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Pune">Pune</option>
                                    <option value=""></option>
                                </select>
                                <span class="text-danger">
                                    @error('city')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <button class="btn btn-primary btn-sm">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
