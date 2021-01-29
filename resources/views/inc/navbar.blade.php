<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">VAS cinemas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link @if(Route::is('home')) active @endif" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link @if(Route::is('dashboard')) active @endif" href="{{ route('dashboard') }}">Dashboard</a>
            </div>
            <div class="navbar-nav ml-auto">
                @guest
                <a class="nav-link @if(Route::is('register')) active @endif" href="{{ route('register') }}">Register</a>
                <a class="nav-link @if(Route::is('login')) active @endif" href="{{ route('login') }}">Login</a>
                @endguest
                @auth
                <a class="nav-link active" href="">{{ auth()->user()->username}}</a>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-link text-light text-decoration-none">Logout</button>
                </form>

                @endauth
            </div>
        </div>
    </div>
</nav>