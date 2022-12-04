<header>

<nav class="navbar navbar-expand-lg bg-light shadow-sm">
     
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/"">Home</a>
        </li>
    @if(Auth::check())
        <li class="nav-item">
            <a class="nav-link" href="/posts">Posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/posts/create">Submit</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('single-user', ['id' => auth()->user()->id]) }}">
                {{ auth()->user()->name }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
        </li>
    @endif
    </ul>
</nav>
</header>
