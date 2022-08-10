<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color: #05323C !important;">
    <div class="container ">
        <a class="navbar-brand px-3 mx-0 py-1 align-self-center" href="#" style="background-color: white; border-radius: 99px;">
            <img src="/asset/img/white.png" alt="logo" height="24" class="d-inline-block">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @auth
        <div class="collapse navbar-collapse px-5 justify-content-start" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home/sop', 'home/sop/create') ? 'active' : '' }}" href="/home/sop" style="color: white !important; font-weight: 500;">SOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home/document', 'home/document/create') ? 'active' : '' }} ms-3" href="/home/document" style="color: white !important; font-weight: 500;">Berkas</a>
                </li>
                @if (auth()->user()->jabatan == 'Admin')
                <li class="nav-item">
                    <a class="nav-link " href="# " style="color: white !important; font-weight: 500;">Admin</a>
                </li>
                @endif
            </ul>
        </div>
        @endauth

        <div class="justify-content-end">
            @auth
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-transparent no-focus-outline" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border: none !important;">{{ auth()->user()->nama_anggota }} ({{ auth()->user()->id_anggota }})</button>
                <ul class="dropdown-menu">
                    <li>
                        <form action="/logout" method="post">
                            @csrf 
                            <button type="submit" class="dropdown-item ">Keluar</button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    </div>
</nav>