
@extends('layout')

@section('data')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center my-3">Add City</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('addCity')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">City Name</label>
                            <input type="text" name="city_name" class="form-control">
                        </div>
                        <button class="btn btn-primary btn-sm">Add City</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
