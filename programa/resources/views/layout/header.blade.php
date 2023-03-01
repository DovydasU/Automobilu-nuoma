<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Meniu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(request()->routeIs('home')) active @endif"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item @if(request()->routeIs('about')) active @endif"><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item @if(request()->routeIs('services.index')) active @endif"><a href="{{route('services.index')}}" class="nav-link">Services</a></li>
                <li class="nav-item @if(request()->routeIs('prices')) active @endif"><a href="{{route('prices')}}" class="nav-link">Pricing</a></li>
                <li class="nav-item @if(request()->routeIs('car')) active @endif"><a href="{{route('car')}}" class="nav-link">Cars</a></li>
                <li class="nav-item @if(request()->routeIs('admin')) active @endif"><a href="{{route('admin')}}" class="nav-link">Admin</a></li>
                <li class="nav-item @if(request()->routeIs('contacts')) active @endif"><a href="{{route('contacts')}}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>