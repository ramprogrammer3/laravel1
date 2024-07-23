<h1>header page here </h1>


<ul>
    @foreach ($name as $fruit )
        <li> {{$fruit}} </li>
    @endforeach
</ul>

@forelse ($name as $fruit )
    <p> {{$fruit}} </p>
@empty
    <p> NO element found here  </p>
@endforelse