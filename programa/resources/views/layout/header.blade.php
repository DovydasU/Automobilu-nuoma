<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Car<span>Book</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Meniu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(request()->routeIs('home')) active @endif"><a href="{{route('home')}}" class="nav-link">Pagrindinis</a></li>
                <li class="nav-item @if(request()->routeIs('about')) active @endif"><a href="{{route('about')}}" class="nav-link">Apie</a></li>
                <li class="nav-item @if(request()->routeIs('services.index')) active @endif"><a href="{{route('services.index')}}" class="nav-link">Paslaugos</a></li>
                <li class="nav-item @if(request()->routeIs('prices')) active @endif"><a href="{{route('prices')}}" class="nav-link">Kainos</a></li>
                <li class="nav-item @if(request()->routeIs('car')) active @endif"><a href="{{route('car')}}" class="nav-link">Automobiliai</a></li>
                <li class="nav-item @if(request()->routeIs('admin')) active @endif"><a href="{{route('admin')}}" class="nav-link">Administravimas</a></li>
                <li class="nav-item @if(request()->routeIs('contacts')) active @endif"><a href="{{route('contacts')}}" class="nav-link">Kontaktai</a></li>
            </ul>
        </div>
    </div>
</nav>