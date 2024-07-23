<h1>laravel blade template here start </h1>
{{ 3 + 5 }}
<br><br>
{{ 'Ram kumar maniyari ' }}
<br><br>

{{ '<h1> Hello world </h1>' }}
<br><br>

{!! '<h1> Hello world </h1>' !!}

{{-- {!!"<script> alert('ram kumar') </script>"!!} --}}

{{-- This is comment statement  --}}


@php
    $name = 'ram kumar sitamarhi';
    echo "<p>Your name is $name </p>";
@endphp

<h1> {{ $name }} </h1>

@php
    $arr = ['ram', 'apple', 'banana', 'grapes'];
@endphp

<ul>
    @foreach ($arr as $element)
        <li> {{ $element }} </li>
    @endforeach
</ul>
