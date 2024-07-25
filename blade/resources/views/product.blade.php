@extends('layouts.masterlayout')

@section('content')
    <div class="content">
        <h2>Product page</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae adipisci commodi quo animi aut quidem omnis libero vel distinctio quam odit minus quis qui at numquam asperiores repudiandae in, quia fuga! Sint officia voluptatem maxime architecto modi porro magni laboriosam eos pariatur, suscipit ducimus eum ipsam fugiat, dicta totam a assumenda quaerat accusantium amet repellat! Perferendis maxime, ullam quibusdam labore modi distinctio! Minus quod cupiditate aliquam. Modi exercitationem autem consectetur impedit vel, officia adipisci praesentium tenetur blanditiis itaque rerum voluptatem temporibus, laudantium culpa tempore, quia harum sequi! Laudantium fugit at, quas obcaecati repellat a, dolores magni nulla quasi dolorum ullam corrupti numquam labore recusandae architecto. Maxime laudantium possimus adipisci incidunt. Modi perferendis nobis explicabo veniam. Nostrum placeat ea quaerat minima!</p>
    </div>
@endsection

@section('title')
    product
@endsection

@prepend('style')
    <style>
        .content{
            background: blue;
            color: white;
        }
    </style>
@endprepend