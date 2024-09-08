@extends('layout')

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="my-3 text-center">Update User data</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('users.update',$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input type="text" name="age" class="form-control" value="{{ $user->age }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" name="city" class="form-control" value="{{ $user->city }}">
                            </div>
                            <button class="btn btn-primary btn-sm" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
