{{-- navbar --}}
<nav class="navbar navbar-expand-md navbar-dark box-shadow">
    <div class="container d-flex justify-content-between align-items-center px-3">
        
        <a class="navbar-brand" href="/">Makeit</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "inspiration") ? 'active' : '' }}" href="/inspiration">Inspiration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "today") ? 'active' : '' }}" href="/today">Today</a>
                </li>
            </ul>
        </div>
        
        <div class="dropdown align-itemns-center">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <ion-icon name="person-outline"></ion-icon>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                <li class="dropdown-item">Login/Register</li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Your profile</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
            </ul>
          </div>
        
    </div>
</nav>
{{-- end of navbar --}}