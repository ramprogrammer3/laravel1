
@extends('layout')

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="my-3">Show All Records</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                    </thead>

                    <tbody>
                        @foreach ($data as $id => $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->age}}</td>
                                <td>{{$student->city_name}}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
        </div>
    </div>
@endsection
