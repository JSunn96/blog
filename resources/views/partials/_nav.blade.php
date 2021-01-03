<header>
        <div class="container-fluid position-relative no-side-padding">

            <a href="#" class="logo">Blog</a>

            <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

            <ul class="main-menu visible-on-click" id="main-menu">
                <li class="{{ Request::is('/')  ? "active": "" }}"><a href="/">Főoldal</a></li>
                <li class="{{ Request::is('/about')  ? "active": "" }}"><a href="/about">Rólam</a></li>
				<li class="{{ Request::is('/contact')  ? "active": "" }}"><a href="/contact">Kapcsolat</a></li>
				<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Account</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>

            </ul><!-- main-menu -->

            <div class="src-area">
                <form>
                    <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    <input class="src-input" type="text" placeholder="Type of search">
                </form>
            </div>
            
               
            

        </div><!-- conatiner -->
    </header>
