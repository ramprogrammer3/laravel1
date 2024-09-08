@extends('layout')

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="my-3 text-center">User Details</h3>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <td> {{$user->name}} </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td> {{$user->email}} </td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td> {{$user->age}} </td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td> {{$user->city}} </td>
                    </tr>
                </table>
                <a href="{{route('users.index')}}" class="btn btn-primary btn-sm">Go to Home page</a>
            </div>
        </div>
    </div>
@endsection
