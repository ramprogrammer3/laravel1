@php
    $user = "Ram Kumar";
    $fruits = ["Apple","Orange","Banana","Grapes"];
@endphp


<script>
    // var data = {{$user}};
    // console.log(data);

    var data = @json($user);
    console.log(data);

    let arr = @json($fruits);
    console.log(arr);

    arr.forEach(element => {
        console.log(element);
    });
    
</script>