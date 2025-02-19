<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 footer-widget footer-widget-about">
                    <div class="footer-widget__content">
                        <img src="{{ asset('Assets') }}/Images/Untitled-1.png" alt="logo" class="img-small">
                    </div>
                    <div class="mt-10">
                        <h6 class="text__block-title text-white text-size-17 mb-2">Newslater</h6>
                        <form class="footer-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <button type="submit" class="footer-form__submit"><i
                                        class="icon-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">Home</h6>
                    <div class="footer-widget__content">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('about.us') }}">About Us</a></li>
                            <li><a href="leadership-team.html">Contact</a></li>
                            <li><a href="{{ route('careers') }}">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">Publications</h6>
                    <div class="footer-widget__content">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('insight') }}">Insight</a></li>
                            <li><a href="{{ route('research') }}">Research</a></li>
                            <li><a href="{{ route('update') }}">Update</a></li>
                            <li><a href="{{ route('insight') }}">Next Brief</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">Find Us</h6>
                    <div class="footer-widget__content find-us">
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa-solid fa-map"></i>
                                <a href="calto:+012(345)67899">53 Main Street, 2nd Mountain 3rd Floor, New York</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="calto:+012(345)67899">+012 (345) 678 99</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="mailto:support@gmail.com">support@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="footer__copyrights">
                        <span class="fz-14">&copy; 2025 Next Indonesia, All Rights Reserved.</span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2 text-center">
                    <button id="scrollTopBtn" class="my-2"><i class="icon-arrow-up-2"></i></button>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end align-items-center">
                    <ul class="social-icons list-unstyled mb-0 mr-30">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
@stack('jq-min-js')
@stack('own-page')
@stack('js-plugin')
@stack('js-custom')
<script async src="{{ asset('Assets') }}/JS/plugins.js"></script>
<script async src="{{ asset('Assets') }}/JS/main.js"></script>
</body>
</html>
