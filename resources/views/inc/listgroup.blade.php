<div class="list-group">
    <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action @if(Route::is('dashboard')) active  @endif">
        Dashboard
    </a>
    <a href="{{ route('cinemas') }}" class="list-group-item list-group-item-action  @if(Route::is('cinemas')) active  @endif">Cinemas</a>
    <!-- <a href="{{ route('movies') }}" class="list-group-item list-group-item-action  @if(Route::is('movies')) active  @endif">Movies</a> -->

</div>