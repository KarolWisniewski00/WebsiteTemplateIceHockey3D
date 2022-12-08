<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset=UTF-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NHL | PL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <script src="{{asset('js/three.min.js')}}"></script>
    <script src="{{asset('js/GLTFLoader.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/PixiPlugin.min.js"></script>
</head>

<body>
    <script>
        //get data from php
        var teams = {!!json_encode($teams) !!};
        var records = {!!json_encode($records) !!};
    </script>
    @yield('loading')
    <main id="body">
        <div id="bg"></div>
        <div class="puck d-none d-sm-none d-md-none d-lg-block">
            <img src="images/puck.png" alt="down" width="30px" class="img-fluid">
        </div>
        @yield('helmet')
        <section id="main">
            <header class="p-3 shadow bg-transparent">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-none d-md-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                            <img src="{{asset('images/nhl.png')}}" class="img-fluid mx-3" alt="nhl" style="max-width: 2em;">
                        </a>

                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            @yield('nav')
                        </ul>
                    </div>
                </div>
            </header>
            @yield('content')
            <div class="container mt-5 pt-5">
                <footer class="py-3 my-4 bg-transparent">
                    <ul class="nav justify-content-center pb-3 mb-3">
                        <li class="nav-item"><a href="{{url('/')}}" class="nav-link px-2 text-muted">Start</a></li>
                        <li><a href="{{url('/about')}}" class="nav-link px-2 text-muted">O projekcie</a></li>
                    </ul>
                    <p class="text-center text-muted">&copy; 2022 Karol Wiśniewski</p>
                </footer>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="{{asset('js/sliderTeams.js')}}"></script>
        <script src="{{asset('js/sliderTable.js')}}"></script>
    </main>
</body>

</html>