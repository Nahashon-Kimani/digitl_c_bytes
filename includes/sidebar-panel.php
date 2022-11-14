
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
    <img src="../assets/images/logo/placeholder-logo.png" alt="{{ config('app.name') }}" class="logo img-fluid">

        {{-- <a class="logo-1" href="{{ route('welcome') }}"><img class="logo" src="../assets/images/logo/logo-1.svg" alt="{{ config('app.name') }}"></a>
        <a class="logo-2" href="{{ route('welcome') }}"><img class="logo" src="../assets/images/logo/logo-4.svg" alt="{{ config('app.name') }}"></a>
        <a class="logo-3" href="{{ route('welcome') }}"><img class="logo" src="../assets/images/logo/logo-3.svg" alt="{{ config('app.name') }}"></a>
        <a class="logo-4" href="{{ route('welcome') }}"><img class="logo" src="../assets/images/logo/logo-5.svg" alt="{{ config('app.name') }}"></a> --}}
        <div class="body d-none d-xl-block">
            <p class="disc">
                We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+255753271545">+255 753 271 545</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:support@digitalcloudbytes.com">support@digitalcloudbytes.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="{{ route('welcome') }}">www.digitalcloudbytes.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">Tanga, Tanzania</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="body-mobile d-block d-xl-none">
            <nav class="nav-main mainmenu-nav">
                <ul class="mainmenu">
                    <li><a class="nav-item" href="{{ route('welcome') }}">Home</a></li>
                    <li><a class="nav-item" href="{{ route('about-us') }}">About Us</a></li>
                    <li><a class="nav-item" href="{{ route('our-services') }}">Our Services</a></li>
                    {{-- <li class="has-droupdown">
                        <a class="nav-link" href="#">Services</a>
                        <ul class="submenu">
                            <li><a href="our-service.html">Our Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="nav-item" href="{{ route('contact-us') }}">Contact</a></li>
                </ul>
            </nav>
            <div class="social-wrapper-two menu mobile-menu">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
            </div>
            <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Learn More</a>
        </div>
    </div>
    <!-- inner menu area desktop End -->
</div>