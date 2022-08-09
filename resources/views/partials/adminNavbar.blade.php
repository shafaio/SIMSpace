<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color: #05323C !important;">
    <div class="container ">
        <a class="navbar-brand px-3 mx-0 py-1 align-self-center" href="#" style="background-color: white; border-radius: 99px;">
            <img src="../asset/img/white.png" alt="logo" height="24" class="d-inline-block">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-end">
            @auth
            {{-- <h6 class="m-0">ID Space</h6> --}}
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-transparent no-focus-outline" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border: none !important;">Admin</button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <form action="/logout" method="post">
                            @csrf 
                            <button type="submit" class="dropdown-item">Keluar</button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    </div>
</nav>