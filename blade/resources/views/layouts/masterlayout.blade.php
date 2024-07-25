
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website @yield("title",'ramkumar') </title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Website Name</h1>
        </header>
        <div class="nav">
            <ul>
                <li><a href="/"> Home</a></li>
                <li><a href="/about"> About</a></li>
                <li><a href="/contact"> Contact</a></li>
                <li><a href="/product"> Product</a></li>
                <li><a href="/blog"> Blog</a></li>
            </ul>
        </div>
        <main class="clearfix">
            @hasSection('content')
                @yield('content')
            @else
                <h2>No Content found </h2>
            @endif

            <div class="sidebar">
                @section("sidebar")
                <ul>
                        <li><a href="/"> Home</a></li>
                        <li><a href="/about"> About</a></li>
                        <li><a href="/contact"> Contact</a></li>
                        <li><a href="/product"> Product</a></li>
                        <li><a href="/blog"> Blog</a></li>
                    </ul>
                    @show
                </div>
        </main>
        <footer>
            ramkumar@copyright2024
        </footer>
    </div>
</body>
</html>