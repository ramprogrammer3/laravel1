

@php
    $fruits = ['apple',"banana","grapes","Orange"];
@endphp


@include('pages.header',['name' => $fruits])

<h1>laravel blade template here start </h1>

@include('pages.footer')

@includeIf("pages.content")