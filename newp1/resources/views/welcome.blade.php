
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1>My Home page here </h1>
    <div class="row">
        <div class="col-md-6 border p-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime architecto repudiandae nihil culpa rem eos nemo est, consectetur, provident reprehenderit, eaque esse. Ipsum laboriosam rerum molestias voluptas a quos aliquam. Cum iusto dolor tenetur! Inventore, possimus eaque ab quaerat, deserunt, veniam distinctio ipsa recusandae voluptatem sunt asperiores quidem non corporis.</p>
        </div>
    </div>

    @php
        $name = "Ram Kumar";
        $village = "Maniyari";
        $dist = "Sitamarhi";

        $array1 = ["Apple","Banana","Mango","Grapes","Pine Apple"];
    @endphp


    <div class="row">
        <div class="col-md-6 mt-4">
            {{"hello This is blade first text"}}
            <br>
            <h1>My name is {{$name}} </h1>
            <h2>Village : {{$village}} </h2>
            <h2>District : {{$dist}} </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            @foreach ($array1 as $fruit )
                <h3> {{$loop->iteration}} {{$fruit}} </h3>
            @endforeach
        </div>
    </div>
</div>
