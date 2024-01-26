<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="/logo LC.jpg" style="border-radius:50%; overflow:hidden;" width="40" height="40" alt="."> Lidia <span>Chen</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNavDropdown" >
            <ul class="navbar-nav mx-auto" style="font-weight: bold;">
                <li class="nav-item mx-3">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ Request::is('aboutus') ? 'active' : '' }}" href="/aboutus">About</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ Request::is('ourcollection') ? 'active' : '' }}" href="/ourcollection">Our Collection</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
            
        

            <ul class="navbar-nav ms-auto" style="font-weight: bold;">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expended="false">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="/register"><i class="bi bi-box"></i> Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>