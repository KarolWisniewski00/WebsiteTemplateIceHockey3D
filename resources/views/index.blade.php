@extends('layouts.main')
@section('loading')
<div id="loading">
    <div id="loading-text">TRWA ŁADOWANIE...</div>
</div>
@endsection
@section('helmet')
<script src="{{asset('js/main.js')}}"></script>
@endsection
@section('nav')
<li><a href="{{url('/#first')}}" class="nav-link px-2 text-secondary">Start</a></li>
<li><a href="{{url('/#second')}}" class="nav-link px-2 text-black">Najbliższe mecze</a></li>
<li><a href="{{url('/#third')}}" class="nav-link px-2 text-black">Statystyki</a></li>
<li><a href="{{url('/#fourth')}}" class="nav-link px-2 text-black">Tabela</a></li>
<li><a href="{{url('/about')}}" class="nav-link px-2 text-black">O projekcie</a></li>
@endsection
@section('content')
<!--FIRST-->
<section id="first">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-6 d-flex flex-column justify-content-center">
                <div>
                    <!--CONTENT-->
                    <h1 class="header-title-1">HOKEJ</h1>
                    <p id="first-paragraf" class="paragraf">
                        Strona internetowa o tematyce amerykańskiej ligi hokeja - NHL.
                        Strona posiada dostęp do nadchodzących meczy, statystyk oraz tabel wyników.
                        W planach jest rozwinięcie projektu o kolejne ligi i wiele więcej!
                    </p>
                    <a href="#second" class="btn btn-danger mb-1">Mecze</a>
                    <a href="{{url('about')}}" class="btn btn-outline-dark mb-1">Więcej o projekcie</a>
                    <!--SCROLL-->
                    <div class="scroll-down w-100 text-center">
                        <div class="hover">
                            <a href="#second" class="text-black text-decoration-none">
                                <div>SKROLUJ W DÓŁ</div>
                                <img src="images/down.png" alt="down" width="20px" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!--ENDCONTENT-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECOND-->
<section id="second">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-6 col-lg-3 offset-lg-9 d-flex flex-column justify-content-center">
                <div id="second-div">
                    <!--CONTENT-->
                    <div class="before-title">Najbliższe</div>
                    <h1 class="header-title text-danger" id="second-header">Mecze</h1>
                    <p id="second-paragraf" class="paragraf">
                        Daty są podane w środkowoeuropejskiej strefie czasu standardowego
                    </p>
                    <div class="maches">
                        @if (isset($maches))
                        @foreach ($maches as $mach)
                        <div class="d-flex flex-row text-center">
                            <div class="d-flex flex-column">
                                @foreach ($teams as $team)
                                    @if ($team['id'] == $mach['teams']['away']['team']['id'])
                                        <div><img src="{{asset('images/teams/'.$team['abbreviation'].'.png')}}" class="img-fluid" alt="{{ $team['abbreviation'] }}"></div>
                                        <h3>{{ $team['abbreviation'] }}</h3>
                                    @endif
                                @endforeach
                            </div>
                            <div class="d-flex flex-column justify-content-center mx-2">
                                <div>godz.</div>
                                <h3>{{date('h:i', strtotime($mach['gameDate']. ' + 1 hours'))}}</h3>
                                <div>{{date('d.m', strtotime($mach['gameDate']. ' + 1 hours'))}}</div>
                                <div class="text-black-50">{{date('Y', strtotime($mach['gameDate']. ' + 1 hours'))}}</div>
                            </div>
                            <div class="d-flex flex-column">
                                @foreach ($teams as $team)
                                    @if ($team['id'] == $mach['teams']['home']['team']['id'])
                                        <div><img src="{{asset('images/teams/'.$team['abbreviation'].'.png')}}" class="img-fluid" alt="{{ $team['abbreviation'] }}"></div>
                                        <h3>{{ $team['abbreviation'] }}</h3>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        @endforeach
                        @else
                        <div class="text-danger text-center fw-bold">Brak meczy w najbliższych 30 dniach</div>
                        @endif
                    </div>
                    <!--SCROLL-->
                    <div class="scroll-down w-100 text-center">
                        <div class="hover">
                            <a href="#third" class="text-black text-decoration-none">
                                <div>STATYSTYKI</div>
                                <img src="images/down.png" alt="down" width="20px" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!--ENDCONTENT-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--THIRD-->
<section id="third">
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-3 d-flex flex-column justify-content-center">
                <div id="third-text">
                    <!--CONTENT-->
                    <span id="third-paragraf"></span>
                    <div id="carouselTeams" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($teams as $team)
                            @if ($team['id'] == 1)
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{asset('images/teams/'.$team['abbreviation'].'.png')}}" class="d-block w-100 p-5" alt="{{ $team['abbreviation'] }}">
                            </div>
                            @else
                            <div class="carousel-item" data-bs-interval="5000">
                                <img src="{{asset('images/teams/'.$team['abbreviation'].'.png')}}" class="d-block w-100 p-5" alt="{{ $team['abbreviation'] }}">
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTeams" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselTeams" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <h1 class="header-title-1 text-danger" id="third-header">Statystyki</h1>
                    <div class="after-title">sezonu</div>
                    <p class="paragraf">
                        Dla każdej drużyny pokazuje liczbę wygranych, zdobytych goli oraz wygranych wznowień gry
                    </p>
                    <!--SCROLL-->
                    <div class="scroll-down w-100 text-center">
                        <div class="hover">
                            <a href="#fourth" class="text-black text-decoration-none">
                                <div>TABELA</div>
                                <img src="images/down.png" alt="down" width="20px" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!--ENDCONTENT-->
                </div>
            </div>
            <div class="col-6 col-lg-3 offset-lg-6 d-flex flex-column justify-content-center">
                <div class="align-items-end d-flex flex-column text-center" id="third-images">
                    <!--CONTENT-->
                    <div class="w-25 my-3">
                        <img class="img-fluid img-hover" src="{{asset('images/success.png')}}" alt="icon-trofeum">
                    </div>
                    <div class="w-25 stats" id="wins">{{$teams[0]['teamStats'][0]['splits'][0]['stat']['wins']}}</div>
                    <div class="w-25 my-3">
                        <img class="img-fluid img-hover" src="{{asset('images/goal.png')}}" alt="icon-goal">
                    </div>
                    <div class="w-25 stats" id="goals">{{intval($teams[0]['teamStats'][0]['splits'][0]['stat']['goalsPerGame']*$teams[0]['teamStats'][0]['splits'][0]['stat']['gamesPlayed'])}}</div>
                    <div class="w-25 my-3">
                        <img class="img-fluid img-hover" src="{{asset('images/hockey.png')}}" alt="icon-hockey">
                    </div>
                    <div class="w-25 stats" id="faceoff">{{$teams[0]['teamStats'][0]['splits'][0]['stat']['faceOffsWon']}}</div>
                    <!--ENDCONTENT-->
                </div>
            </div>
        </div>
    </div>
</section>
<section id="fourth">
    <div class="container">
        <div class="row">
            <div class="col-8 d-flex flex-column justify-content-center">
                <div id="table-gsap">
                    <!--CONTENT-->
                    <div id="carouselTable" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselTable" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselTable" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselTable" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselTable" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="mx-5 my-3 text-center">
                                    <h1 class="header-title-1 text-danger" id="third-header">tabela</h1>
                                    <div class="after-title">{{$records[0]['division']['name']}}</div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="mx-5 my-3 text-center">
                                    <h1 class="header-title-1 text-danger" id="third-header">tabela</h1>
                                    <div class="after-title">{{$records[1]['division']['name']}}</div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-5 my-3 text-center">
                                    <h1 class="header-title-1 text-danger" id="third-header">tabela</h1>
                                    <div class="after-title">{{$records[2]['division']['name']}}</div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-5 my-3 text-center">
                                    <h1 class="header-title-1 text-danger" id="third-header">tabela</h1>
                                    <div class="after-title">{{$records[3]['division']['name']}}</div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTable" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselTable" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <table class="table table-striped align-middle text-center">
                        <thead>
                            <tr>
                                <th scope="col" id="table">#</th>
                                <th scope="col">TEAM</th>
                                <th scope="col">GP</th>
                                <th scope="col">W</th>
                                <th scope="col">L</th>
                                <th scope="col">OT</th>
                                <th scope="col">PTS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records[0]['teamRecords'] as $teamRecords)
                            <tr>
                                <th scope="row" id="{{$teamRecords['divisionRank']}}-dr">{{$teamRecords['divisionRank']}}</th>
                                @foreach ($teams as $team)
                                @if ($team['id'] == $teamRecords['team']['id'])
                                <td><img id="{{$teamRecords['divisionRank']}}-img" src="{{asset('images/teams/'.$team['abbreviation'].'.png')}}" class="img-fluid" width="50px" alt="{{ $team['abbreviation'] }}"></td>
                                @endif
                                @endforeach
                                <td id="{{$teamRecords['divisionRank']}}-gp">{{$teamRecords['leagueRecord']['wins']+$teamRecords['leagueRecord']['ot']+$teamRecords['leagueRecord']['losses']}}</td>
                                <td id="{{$teamRecords['divisionRank']}}-w">{{$teamRecords['leagueRecord']['wins']}}</td>
                                <td id="{{$teamRecords['divisionRank']}}-l">{{$teamRecords['leagueRecord']['losses']}}</td>
                                <td id="{{$teamRecords['divisionRank']}}-ot">{{$teamRecords['leagueRecord']['ot']}}</td>
                                <td id="{{$teamRecords['divisionRank']}}-points">{{$teamRecords['points']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--ENDCONTENT-->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection