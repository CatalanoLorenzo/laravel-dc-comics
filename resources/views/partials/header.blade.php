<header>
    <nav class="blue_nav">
        <div class="container">
            <div class="row">
                <!-- blue nav -->
                <div class="col text-white justify-content-end d-flex ">
                    <ul class="d-flex align-items-baseline m-0">
                        <li class="nav-item text-decoration-none list-unstyled px-2">
                            <a class="nav-link" aria-current="page" href="#">DC POWERTM VISA®</a>
                        </li>
                        <li class="nav-item  text-decoration-none list-unstyled ">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white p-0 m-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ADDITIONAL DC SITE
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-dark" href="#">ADDITIONAL DC SITE 1</a></li>
                                    <li><a class="dropdown-item" href="#">ADDITIONAL DC SITE 2</a></li>
                                    <li><a class="dropdown-item" href="#">ADDITIONAL DC SITE 3</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="white_nav my-5">
        <div class="container">
            <div class="row flex-column">

                <div class="col d-flex">
                    <div class="navbar-brand d-flex align-items-center">
                        <a href="/Comics" class="py-3 d-block">
                            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                        </a>
                    </div>
                    <ul class="d-flex align-items-center m-0 justify-content-between menu">
                        @foreach ($voices as $voice)

                        @if($voice === 'Shop')
                        <li class="nav-item text-decoration-none list-unstyled px-1 text-black ">
                            <div class="dropdown">
                                <button class="btn  dropdown-toggle fs-4 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    SHOP
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">SHOP 1</a></li>
                                    <li><a class="dropdown-item" href="#">SHOP 2</a></li>
                                    <li><a class="dropdown-item" href="#">SHOP 3</a></li>
                                </ul>
                            </div>
                        </li>
                        @else
                        <li class="nav-item text-decoration-none list-unstyled px-1 text-black  fs-4 {{Route::currentRouteName() === $voice ? 'select' : ''}}">
                            <a class="nav-link" aria-current="page" href="/{{$voice}}">{{strtoupper($voice)}}</a>
                        </li>
                        @endif
                        @endforeach
                        <li class="searchbox av-item text-decoration-none list-unstyled px-1 text-black fs-4 {{Route::currentRouteName() === $voice ? 'select' : ''}}">
                            <div class="d-flex ">
                                <input type="text" class="form-control border-0 " placeholder="Search">
                                <span class="border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                    </svg>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>