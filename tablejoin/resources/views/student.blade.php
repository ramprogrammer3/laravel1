
@extends('layout')

@section('student')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="my-3">Add Student Data </h3>

                <div class="card">
                    <div class="card-body">
                        <form action="{{route('add')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label"> Name </label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Email </label>
                                <input type="text" class="form-control" name="email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Age </label>
                                <input type="text" class="form-control" name="age">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> City ID </label>
                                <input type="text" class="form-control" name="city">
                            </div>
                             
                            <button class="btn btn-primary btn-sm" type="submit">Add </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection