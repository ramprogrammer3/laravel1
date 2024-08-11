<h1>This is user page here </h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus, non aliquam veniam corrupti repudiandae iste nulla iure modi commodi tempore corporis eos id aspernatur, perferendis natus! Animi, illo voluptate.</p>

{{-- <h1>Your name is {{$user}} </h1> --}}
<h3>Your city is {{$city}} </h3>

@foreach ($user as $id => $u )

<h3> {{$id}} {{$u['name']}} | {{$u['phone']}} | {{$u['city']}}
| <a href="{{route('view.user',$id)}}">Show</a>    
</h3>
    
@endforeach