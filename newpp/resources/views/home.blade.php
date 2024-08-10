@extends('layout')

@section('content')
<div class="col-8 content">
    <h2>Home pagea </h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque laboriosam ab unde sequi earum animi impedit quos, dolor aut necessitatibus aperiam eum ducimus veritatis, maxime quod mollitia amet illum iste fugiat officia corporis iure exercitationem accusantium! Asperiores temporibus amet autem in ratione officiis veniam. Fugit delectus atque dignissimos placeat natus.</p>
</div>
@endsection

@prepend('style')
    <style>
        .content{
            background-color: red;
            color: white;
        }
    </style>
@endprepend