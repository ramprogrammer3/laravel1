@extends('layout')


@section('data')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="my-3 text-center">Add new user data</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('users.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                                <span class="text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email">
                                <span class="text-danger">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control" name="age">
                                <span class="text-danger">
                                    @error('age')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="city">
                                <span class="text-danger">
                                    @error('city')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Add User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection