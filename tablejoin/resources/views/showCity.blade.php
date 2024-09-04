@extends('layout')

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-center my-3">Show All Cities</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Id</th>
                        <th>City Name</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $id => $city)
                            <tr>
                                <td> {{$city->id}} </td>
                                <td> {{$city->city_name}} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection