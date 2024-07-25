
<h1>User page</h1>

{{-- <h2>Hello :  {{$user}} </h2> --}}
{{-- <h2>Your city is : {{$city}} </h2> --}}

{{-- <h2>Js : {!!$js!!} </h2> --}}


@foreach ($user as $id => $u)

<h2> {{$id}}. {{$u['name']}} | {{$u['phone']}} | {{$u['city']}} | <a href="{{route('view.user',$id)}}">Show</a> </h2>
    
@endforeach