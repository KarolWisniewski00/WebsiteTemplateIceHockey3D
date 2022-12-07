@extends('layouts.main')
@section('nav')
<li><a href="{{url('/')}}" class="nav-link px-2 text-secondary">Start</a></li>
<li><a href="{{url('/about')}}" class="nav-link px-2 text-black">O projekcie</a></li>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="header-title-1" style="padding-top: 4em;">Planowane aktualizacje</h1>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action bg-transparent" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Dodanie Polskiej Hokej Ligi - PHL</h5>
                        <small class="text-muted">Do 30.01.2023</small>
                    </div>
                    <p class="mb-1">Roszerzenie najbliższych meczy, statystyk oraz tabel</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Dodanie meczy live</h5>
                        <small class="text-muted">Do 30.01.2023</small>
                    </div>
                    <p class="mb-1">Rozszerzenie o zakładkę podgląd meczy live - same wyniki bez transmisji</p>
                    <small class="text-muted">Dotyczy NHL, jeśli możliwe PHL</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Dodanie szczegółowego wglądu do tabel</h5>
                        <small class="text-muted">Do 28.02.2023</small>
                    </div>
                    <p class="mb-1">Rozszerzenie o zakładkę podglądu o większą ilość danych wraz z możliwością filtracji np.sezonu</p>
                    <small class="text-muted">Dotyczy NHL</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Dodanie statystyk zawodników wraz z wyszukiwarką w pasku nawigacyjnym</h5>
                        <small class="text-muted">Do 28.02.2023</small>
                    </div>
                    <p class="mb-1">Dodanie poglądu danego zawodnika</p>
                    <small class="text-muted">Dotyczy NHL</small>
                </a>
            </div>
        </div>
        <div class="col-12">
            <h1 class="header-title-1 mt-3">Wsparcie</h1>
            <h5 class="mb-2">Strona powinna się wyświtlać prawidłowo na każdym typie urządzenia i przeglądarki - pod warunkiem najnowszej wersji. Urządzenia i przeglądarki bez wsparcia:</h5>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action bg-transparent" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Opera mini</h5>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Iphone SE</h5>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Samsung Galaxy S8+</h5>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Galaxy Fold</h5>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Samsung Galaxy A51/71</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12">
            <h1 class="header-title-1 mt-3">Twórcy i licencje</h1>
            <div class="list-group">
                <div class="list-group-item list-group-item-action bg-transparent" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><a href="https://sketchfab.com/3d-models/hockey-helmet-washington-capitals-e49ac53913ab4bb5af3396cd273ef783" class="text-black text-decoration-none">This work is based on "Hockey Helmet Washington Capitals"</a></h5>
                        <small class="text-muted"><a href="http://creativecommons.org/licenses/by/4.0/" class="text-muted text-decoration-none">licensed under CC-BY-4.0</a></small>
                    </div>
                    <p class="mb-1"><a href="https://sketchfab.com/hophobb" class="text-black text-decoration-none">by Andrey Novichkov</a></p>
                </div>
                <a href="https://www.freepik.com/free-vector/gradient-background-vector-spring-colors_16358969.htm#page=2&query=white%20gradient&position=5&from_view=keyword" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><img src="{{asset('images/bg3.jpg')}}" class="img-fluid"></h5>
                    </div>
                    <p class="mb-1">Image by rawpixel.com on Freepik</p>
                </a>
                <a href="https://www.flaticon.com/free-icons/arrow" title="arrow icons" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><img src="{{asset('images/down.png')}}" class="img-fluid"></h5>
                    </div>
                    <p class="mb-1">Arrow icons created by Freepik - Flaticon</p>
                </a>
                <a href="https://www.flaticon.com/free-icons/win" title="win icons" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><img src="{{asset('images/success.png')}}" class="img-fluid"></h5>
                    </div>
                    <p class="mb-1">Win icons created by Wichai.wi - Flaticon</p>
                </a>
                <a  href="https://www.flaticon.com/free-icons/hockey-puck" title="hockey puck icons" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><img src="{{asset('images/goal.png')}}" class="img-fluid"></h5>
                    </div>
                    <p class="mb-1">Hockey puck icons created by Smashicons - Flaticon</p>
                </a>
                <a href="https://www.flaticon.com/free-icons/hockey" title="hockey icons" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><img src="{{asset('images/hockey.png')}}" class="img-fluid"></h5>
                    </div>
                    <p class="mb-1">Hockey icons created by Freepik - Flaticon</p>
                </a>
                <a href="https://www.flaticon.com/free-icons/puck" title="puck icons" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><img src="{{asset('images/puck.png')}}" class="img-fluid"></h5>
                    </div>
                    <p class="mb-1">Puck icons created by Freepik - Flaticon</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Strona www</h5>
                    </div>
                    <p class="mb-1">Strona na której się znajdujesz jest objęta prawami autorskimi za wyjątkiem elementów opisanych wyżej w liście</p>
                    <small class="text-muted">Stworzone przez Karol Wiśniewski</small>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection