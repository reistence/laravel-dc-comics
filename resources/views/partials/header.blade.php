<header>
    <div class="header-banner">
        <div class="container">
            <span>DC POWER &trade; VISA&#174;</span>
            <span>ADDITIONAL SITES <i class="fa-solid fa-caret-down"></i></span>
        </div>
    </div>
    <div class="container">
        <div>
            <div class="logo">
                <a href="/">
                    <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="" srcset="">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="{{route('comics.index')}}">ALL COMICS</a>
                    </li>
                <li>
                        <a href="{{route('comics.create')}}">ADD COMIC</a>
                    </li>
                    </li>
                </ul>
                <div class="search">
                    <input type="search" name="" id="" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </div>
</header>