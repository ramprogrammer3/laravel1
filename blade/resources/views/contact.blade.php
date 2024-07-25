@extends('layouts.masterlayout')

@section('content')
<div class="content">
    <h2>Contact page</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sapiente veritatis aperiam, ab ipsam doloribus deleniti fugit iure numquam quas, iste cupiditate quos natus! Porro debitis incidunt odit dolor, itaque ullam molestias, illum exercitationem nisi reprehenderit, earum voluptas sit? Repellat similique recusandae eos dolorem fuga! Natus facilis neque reprehenderit temporibus?</p>
</div>
    
@endsection

@section('title')
    contact
@endsection

@section('sidebar')
       @parent 
    <h3>This is appended text here </h3>
    
@endsection