<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    @stack('style')
</head>
<body>
    <div class="container">


        <div class="row">
            <div class="col text-bg-dark">
                <h3 class="text-center py-2">Website Name </h3>
            </div>
        </div>

        <div class="row">
            <div class="col border">
                <ul class="list-unstyled d-flex">
                    <li class="p-1"><a href="/" class="text-decoration-none">Home</a></li>
                    <li class="p-1"><a href="/about" class="text-decoration-none">About</a></li>
                    <li class="p-1"><a href="/contact" class="text-decoration-none">Contact</a></li>
                    <li class="p-1"><a href="/product" class="text-decoration-none">Product</a></li>
                </ul>
            </div>
        </div>

        <div class="row cwrap">
            
           @yield('content')

            <div class="col-4 sidebar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/product">Product</a></li>
                </ul>
            </div>
        </div>

        <footer>websitelayout@ramkumar2024 </footer>

    </div>
</body>
</html>