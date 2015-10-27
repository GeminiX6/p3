<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developers Best Friend' --}}
        @yield('title','Developers Best Friend')
    </title>

    <meta charset='utf-8'>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cyborg/bootstrap.min.css" rel="stylesheet">
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

  <div class="wrapper">
    <header>
        <img
        src='http://vignette3.wikia.nocookie.net/capcomdatabase/images/9/9e/MegaManEightBit.png'
        style='width:150px'
        alt='Developers Best Friend Logo'>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
      <center><a href="https://github.com/GeminiX6/p3">View on GitHub</a></center>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
  </div>

</body>
</html>
