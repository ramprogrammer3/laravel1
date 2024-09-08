@extends('layout')

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Records</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td> {{ $user->id }} </td>
                                <td> {{ $user->name }} </td>
                                <td> {{ $user->email }} </td>
                                <td> {{ $user->age }} </td>
                                <td> {{ $user->city }} </td>
                                <td><a href="" class="btn btn-sm btn-primary">View</a></td>
                                <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
                                <td><a href="" class="btn btn-sm btn-warning">Update</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
