@extends('frontend.master')
@section('header')

    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="Chain App Dev">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#services">Services</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#pricing">Pricing</a></li>
                            <li class="scroll-to-section"><a href="#newsletter">Newsletter</a></li>
                            <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

@endsection
@section('footer')


    <footer id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>Join our mailing list to receive the news &amp; latest trends</h4>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <form id="search" action="#" method="GET">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <fieldset>
                                    <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <fieldset>
                                    <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h4>Contact Us</h4>
                        <p>Rio de Janeiro - RJ, 22795-008, Brazil</p>
                        <p><a href="#">010-020-0340</a></p>
                        <p><a href="#">info@company.co</a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Free Apps</a></li>
                            <li><a href="#">App Engine</a></li>
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">App News</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">App Dev Team</a></li>
                            <li><a href="#">Digital Web</a></li>
                            <li><a href="#">Normal Apps</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h4>About Our Company</h4>
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>

            </div>
        </div>
    </footer>


@endsection
