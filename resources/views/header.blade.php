<header class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <div>
                        <img src="/img/logo.png" alt="" class="img-fluid">
                    </div>
                </a>
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 d-flex justify-content-around">
                    @php
                        $menus =
                        [
                            'index'=>'Главная',
                            'cutting'=>'Плазменная резка',
                            'bend'=>'Гибка листового металла',
                            'bend-pipe'=>'Гибка труб',
                            'forge'=>'Рубка металла'
                        ];
                    @endphp
                    @foreach($menus as $key=>$item)
                    {{-- {{route($key)}} --}}
                        <li class="nav-item">
                            <a class="nav-link @if(Route::currentRouteName()===$key) active @endif" aria-current="page" href="">{{$item}}</a>
                        </li>
                    @endforeach
                    <li class="nav-item d-lg-none d-flex">
                        <a class="nav-link" aria-current="page" href="#">Художественная ковка</a>
                    </li>
                    <li class="nav-item d-lg-none d-flex">
                        <a class="nav-link" aria-current="page" href="#">Подготовка и покраска</a>
                    </li>
                    <li class="nav-item d-lg-none d-flex">
                        <a class="nav-link" aria-current="page" href="#">Докумкентация</a>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-flex">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ещё
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Художественная ковка</a></li>
                            <li><a class="dropdown-item" href="#">Подготовка и покраска</a></li>
                            <li><a class="dropdown-item" href="#">Докумкентация</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
    </div>
</header>
