@push('css-plugin')
@endpush
@extends('HeFo.header')
@section('content')
    <div class="wrapper">
        <!-- ========================
                                                   page title
                                                =========================== -->
        <section class="page-title page-title-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
            <div class="bg-img"><img src="{{ asset('Assets') }}/Images/page-titles/1.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
                        <h1 class="pagetitle__heading mb-100">About Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-title page-title-layout15 pt-100 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <p class="pagetitle__desc">Our security services can help ensure your business Trusted by the
                            world's best
                            organizations. You need information security services to proactively prevent and protect
                            confidential
                            data.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="work-process pb-100 pt-100">
            <div class="bg-img"><img src="{{ asset('Assets') }}/Images/backgrounds/14.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="heading mb-80">
                            <h3 class="heading__title color-white">Visi</h3>
                            <div class="position-relative">
                                <i class="icon-quote"></i>
                                <p class="color-white font-weight-bold fz-16 mb-30">SmartData been helping organizations
                                    throughout the
                                    World to
                                    manage their IT with our unique approach to technology management and consultancy
                                    solutions. </p>
                            </div>
                        </div>
                        <div class="heading">
                            <h3 class="heading__title color-white">Misi</h3>
                            <nav class="nav nav-tabs">
                                <a class="process-item d-flex flex-wrap active">
                                    <div class="process-item__icon">
                                    </div>
                                    <div class="process-item__content">
                                        <h4 class="process-item__title">Brainstorming</h4>
                                        <p class="process-item__desc">The first step is to take the projects data & think
                                            about
                                            to manage all
                                            aspects of your software assets including maintenance. Our skilled personnel
                                            along
                                            with a high-level
                                            look at the client’s network and suggestions for strategic direction utilising
                                            the
                                            latest processing
                                            software.</p>
                                    </div>
                                </a>
                                <a class="process-item d-flex flex-wrap">
                                    <div class="process-item__icon">
                                    </div>
                                    <div class="process-item__content">
                                        <h4 class="process-item__title">Concept Prototype</h4>
                                        <p class="process-item__desc">To know about the product, customers & competitors
                                            offer
                                            integral
                                            communication services software assets. Our skilled personnel, utilising the
                                            latest
                                            processing
                                            software, combined with decades of experience. Once the critical situation
                                            resolved,
                                            work on the ITA
                                            roadmap resumed.</p>
                                    </div>
                                </a>
                                <a class="process-item d-flex flex-wrap">
                                    <div class="process-item__icon">
                                    </div>
                                    <div class="process-item__content">
                                        <h4 class="process-item__title">Design Layout</h4>
                                        <p class="process-item__desc">Start to work on the design taking with collected
                                            data,
                                            we're
                                            responsible
                                            for our process and results. Skilled personnel, utilising the latest processing
                                            software, combined
                                            with decades of experience about the product & competitors offer integral
                                            communication services.
                                        </p>
                                    </div>
                                </a>
                                <a class="process-item d-flex flex-wrap">
                                    <div class="process-item__icon">
                                    </div>
                                    <div class="process-item__content">
                                        <h4 class="process-item__title">Evaluation</h4>
                                        <p class="process-item__desc">Reach a conclusion from the investigations about
                                            product
                                            and we thank
                                            each
                                            of our great clients projects, latest software, combined with decades of
                                            experience.
                                        </p>
                                    </div>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-layout1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="heading mb-30">
                            <div class="d-flex align-items-center mb-20">
                                <div class="divider divider-primary mr-30"></div>
                                <h2 class="heading__subtitle mb-0">Timely Service Delivery & Incident Resolutions!! </h2>
                            </div>
                            <h3 class="heading__title mb-40">Manages service delivery across various business like, HR,
                                Legal
                                and
                                other IT departments!!
                            </h3>
                        </div>
                        <div class="position-relative offset-xl-1">
                            <i class="icon-quote"></i>
                            <p class="mb-40">SmartData has been helping organizations throughout the World to manage
                                their IT with our unique approach to technology management and consultancy solutions with
                                appropriate
                                view and permissions to requests, problems, changes, contracts, assets..</p>
                            <ul class="list-items list-items-layout2 list-unstyled d-flex flex-wrap list-horizontal mb-50">
                                <li>Eliminate Repeat Entry</li>
                                <li>Simplify Communication</li>
                                <li>Drive Business Process</li>
                                <li>Speed Up Transactions</li>
                                <li>Structure Data & Docs</li>
                                <li>Automate Workflows</li>
                            </ul>
                            <img src="{{ asset('Assets') }}/Images/about/singnture.png" alt="singnture">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                        <div class="about__img mb-40">
                            <img src="{{ asset('Assets') }}/Images/about/1.jpg" alt="about">
                            <blockquote class="blockquote d-flex align-items-end mb-0">
                                <div class="blockquote__content">
                                    <h4 class="blockquote__title mb-0">As one of the world's largest ITService Providers
                                        with
                                        over 120
                                        engineers and IT support staff are ready to help.
                                    </h4>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="team-layout1 text-center pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-40">
                            <h2 class="heading__subtitle">Management</h2>
                            <h3 class="heading__title">Our Team</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="member">
                            <div class="member__img">
                                <img src="{{ asset('Assets') }}/Images/team/1.jpg" alt="member img">
                                <div class="member__hover">
                                    <div class="member__content-inner">
                                        <ul class="social-icons  justify-content-center list-unstyled mb-0">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="member__info">
                                <h5 class="member__name">Mike Dooley</h5>
                                <p class="member__desc">Chief Executive</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="member">
                            <div class="member__img">
                                <img src="{{ asset('Assets') }}/Images/team/2.jpg" alt="member img">
                                <div class="member__hover">
                                    <div class="member__content-inner">
                                        <ul class="social-icons justify-content-center list-unstyled mb-0">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="member__info">
                                <h5 class="member__name">Michael Brian</h5>
                                <p class="member__desc">Managing Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="member">
                            <div class="member__img">
                                <img src="{{ asset('Assets') }}/Images/team/3.jpg" alt="member img">
                                <div class="member__hover">
                                    <div class="member__content-inner">
                                        <ul class="social-icons justify-content-center list-unstyled mb-0">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="member__info">
                                <h5 class="member__name">Chris Wensel</h5>
                                <p class="member__desc">Vice President</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="member">
                            <div class="member__img">
                                <img src="{{ asset('Assets') }}/Images/team/4.jpg" alt="member img">
                                <div class="member__hover">
                                    <div class="member__content-inner">
                                        <ul class="social-icons justify-content-center list-unstyled mb-0">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="member__info">
                                <h5 class="member__name">Richard Muldoone</h5>
                                <p class="member__desc">Legal Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="member">
                            <div class="member__img">
                                <img src="{{ asset('Assets') }}/Images/team/5.jpg" alt="member img">
                                <div class="member__hover">
                                    <div class="member__content-inner">
                                        <ul class="social-icons  justify-content-center list-unstyled mb-0">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="member__info">
                                <h5 class="member__name">Maria Andaloro</h5>
                                <p class="member__desc">HR Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="member">
                            <div class="member__img">
                                <img src="{{ asset('Assets') }}/Images/team/6.jpg" alt="member img">
                                <div class="member__hover">
                                    <div class="member__content-inner">
                                        <ul class="social-icons justify-content-center list-unstyled mb-0">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="member__info">
                                <h5 class="member__name">Marian Chris</h5>
                                <p class="member__desc">Global Sales</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="member">
                            <div class="member__img">
                                <img src="{{ asset('Assets') }}/Images/team/7.jpg" alt="member img">
                                <div class="member__hover">
                                    <div class="member__content-inner">
                                        <ul class="social-icons justify-content-center list-unstyled mb-0">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="member__info">
                                <h5 class="member__name">Jack Mudson</h5>
                                <p class="member__desc">Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clients pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text__link text-center mb-30">Collaboration
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slick-carousel"
                            data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                            <div class="client">
                                <img src="{{ asset('Assets') }}/Images/clients/1.png" alt="client">
                                <img src="{{ asset('Assets') }}/Images/clients/1.png" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{ asset('Assets') }}/Images/clients/2.png" alt="client">
                                <img src="{{ asset('Assets') }}/Images/clients/2.png" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{ asset('Assets') }}/Images/clients/3.png" alt="client">
                                <img src="{{ asset('Assets') }}/Images/clients/3.png" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{ asset('Assets') }}/Images/clients/4.png" alt="client">
                                <img src="{{ asset('Assets') }}/Images/clients/4.png" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{ asset('Assets') }}/Images/clients/5.png" alt="client">
                                <img src="{{ asset('Assets') }}/Images/clients/5.png" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{ asset('Assets') }}/Images/clients/6.png" alt="client">
                                <img src="{{ asset('Assets') }}/Images/clients/6.png" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{ asset('Assets') }}/Images/clients/7.png" alt="client">
                                <img src="{{ asset('Assets') }}/Images/clients/7.png" alt="client">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('jq-min-js')
    <script src="{{ asset('Assets') }}/JS/jquery-3.5.1.min.js" type="text/javascript" crossorigin="anonymous"></script>
@endpush
@push('js-plugin')
@endpush
@push('js-custom')
@endpush
