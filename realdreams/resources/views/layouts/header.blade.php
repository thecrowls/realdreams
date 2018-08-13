<header>
    <div class="container_12">
        <div class="grid_12">
            <div class="menu_block">
                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                    <ul class="sf-menu">
                        @foreach($menu_points as $menu_point)
                            <li class="current"><a href="index.html">upper($menu_point->name)</a></li>
                        @endforeach
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </div>
        <div class="grid_12">
            <h1>
                <a href="index.html">
                    <img src="{{asset("images/logo.png")}}" alt="Your Happy Family">
                </a>
            </h1>
        </div>
    </div>
</header>