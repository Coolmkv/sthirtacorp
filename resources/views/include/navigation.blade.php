<div class="main-wrapper">
    <!-- header section -->
    <header class="header-wrapper home">
        <div class="header-container">
            <div class="header-inner_wrapper">
                <div class="header-left_navigation">
                    <!-- brand logo -->
                    <div class="brand_wrapper">
                        <a href="{{ url('/') }}" aria-level="Main logo"><img src="assets/img/logo.png" class="img-fluid" width="" height="" alt="SthirtaCorp"/></a>
                    </div>
                    <!-- brand logo -->
                    <!-- header navigation -->
                    <div class="header_navigation">
                        <div class="header-inner_list">
                            <ul class="nav-list">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                <li><a href="{{ route('product') }}">Product & Solution</a>
                                  <ul class="sublinks">
                                    <li><a href="{{ route('tostem') }}">Tostem</a></li>
                                    <li><a href="{{ route('greenlam') }}">Greenlam</a></li>
                                    <li><a href="{{ route('sloan') }}">Sloan</a></li>
                                    <li><a href="{{ route('vox') }}">Vox</a></li>
                                  </ul>
                                </li>
                                <li><a href="{{ route('galleryPages') }}">Gallery</a></li>
                                <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- header navigation -->
                </div>
                <!-- right navigation -->
                <div class="header-right_navigation">
                    <!-- navigation hamburgur -->
                    <div class="hamburgur-file">
                        <div class="menu-btn">
                            <div class="menu-btn__burger"></div>
                        </div>
                    </div>
                    <div class="right_navigation_container">
                        <ul class="social-media">
                            <li><a href="#" aria-label="Read more about Sthirta Corp facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" aria-label="Read more about Sthirta Corp Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" aria-label="Read more about Sthirta Corp Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" aria-label="Read more about Sthirta Corp Youtube"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="#" aria-label="Read more about Sthirta Corp WhatsApp"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- right navigation -->
            </div>
        </div>
    </header>
    <!-- header section -->