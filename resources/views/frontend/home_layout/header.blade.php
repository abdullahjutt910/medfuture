<header>
    <section class="sec-topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 country-icon padd-0">
                    <ul>
                        <li><a href="{{route('front.australia')}}">
                            <p>AUS</p></a>
                        </li>
                        <li><a href="{{route('front.newzeeland')}}">
                            <p>NZ</p></a>
                        </li>
                        <li><a href="{{route('front.uk')}}">
                            <p>UK</p>
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 contact-info padd-0">
                    <ul>
                       
                            <li> <a href="mailto:helpdesk@themedfuture.com">
                                <p>helpdesk@themedfuture.com</p></a>
                            </li>
                        
                            <li><a href="tel:1300633388">
                                <p>1300 633 388</p></a>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar padd-0 navbar-expand-lg navbar-light bg-light">
        <div class="container padd-0">
            <a class="navbar-brand" href="{{route('front.home')}}"><img src="frontend/img/logo.png"
                    alt=""></a>
            <div class="register-inner register-inner-tab-1">
                <a href="{{route('login')}}">Login</a>
                <a href="{{route('aus.candidate.registration')}}">Register</a>
                <span class="down-arrow"><i class="arrow down"></i></span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-inner" id="navbarScroll">
                <ul class="navbar-nav padd-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                        <ul class="dropdown-list">
                            <li>
                                <a
                                    href="{{route('front.australia')}}">Australia</a>
                            </li>
                            <li>
                                <a
                                    href="{{route('front.newzeeland')}}">New
                                    Zealand</a>
                            </li>
                            <li>
                                <a
                                    href="{{route('front.uk')}}">United
                                    Kingdom</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AUS-Medfuture-job-page-perm.html">Job Board</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{route('front.australia')}}">Australia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{route('front.newzeeland')}}">New
                            Zealand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{route('front.uk')}}">United
                            Kingdom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.medfuture.com.au/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">Contact</a>
                    </li>
                    <!-- <li class="nav-item register-btn">
                      
                    </li> -->
                </ul>

            </div>
            <div class="register-inner register-inner-tab-2">
                <a href="{{route('login')}}">Login</a>
                <a href="{{route('aus.candidate.registration')}}">Register</a>
                <span class="down-arrow"><i class="arrow down"></i></span>
            </div>
        </div>
    </nav>
</header>