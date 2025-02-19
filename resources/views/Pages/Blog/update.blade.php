@push('css-plugin')
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link href="{{ asset('Assets') }}/CSS/plugin/animate.min.css" rel="stylesheet" />
    <link href="{{ asset('Assets') }}/CSS/article/update.css" rel="stylesheet" />
@endpush
@extends('HeFo.header')
@section('content')
    <section class="video-article--head-bg page-title text-center mb-80">
        <div class="video-background">
            <video class="head-canal-video" preload="auto" autoplay="autoplay" loop="loop" muted="muted"
                poster="https://dummyimage.com/1000x1500/4d4d4d/636363">
                <source type="video/mp4" src="{{ asset('Assets') }}/video/about-video.mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading heading-light mb-50 sticky-top">
                        <h3 class="heading__title text-font-archia mb-30">Update
                        </h3>
                        <input class="search__input" type="text" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 pb-50">
                <article class="blog-card">
                    <div class="blog-card__background">
                        <div class="card__background--wrapper">
                            <div class="card__background--main"
                                style="background-image: url('{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png');">
                                <div class="card__background--layer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card__head"></div>
                    <div class="canal-desc blog-card__info">
                        <div class="post-prev-title">
                            <h3 class="heading__title"><a href="{{ route('dt.canals') }}">Asap Rokok Makin Tebal di Desa</a></h3>
                        </div>
                        <div class="post-prev-info">
                            MAY 11<span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                        </div>
                        <div class="post-prev-text">
                            Asap rokok semakin tebal di desa, menambah ancaman bagi kesehatan dan lingkungan. Dampaknya terasa pada kualitas udara dan generasi muda yang terpapar kebiasaan merokok sejak dini.
                        </div>
                        <a href="#" class="btn__link btn__white btn__icon px-0">
                            <span class="mr-5">Selengkapnya</span> <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 pb-50">
                <article class="blog-card">
                    <div class="blog-card__background">
                        <div class="card__background--wrapper">
                            <div class="card__background--main"
                                style="background-image: url('{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png');">
                                <div class="card__background--layer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card__head"></div>
                    <div class="canal-desc blog-card__info">
                        <div class="post-prev-title">
                            <h3 class="heading__title"><a href="{{ route('dt.canals') }}">Asap Rokok Makin Tebal di Desa</a></h3>
                        </div>
                        <div class="post-prev-info">
                            MAY 11<span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                        </div>
                        <div class="post-prev-text">
                            Asap rokok semakin tebal di desa, menambah ancaman bagi kesehatan dan lingkungan. Dampaknya terasa pada kualitas udara dan generasi muda yang terpapar kebiasaan merokok sejak dini.
                        </div>
                        <a href="#" class="btn__link btn__white btn__icon px-0">
                            <span class="mr-5">Selengkapnya</span> <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <section class="blog-insight">
        <div class="content masonry">
            <div class="col-sm-6 col-md-4 col-lg-4 pb-70 canal-desc blog-list-ncs">
                <div class="post-prev-img pt-20">
                    <a href="{{ route('dt.canals') }}"><img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png"
                            alt="img"></a>
                </div>
                <div class="post-prev-title">
                    <h3 class="heading__title"><a href="{{ route('dt.canals') }}">Asap Rokok Makin Tebal di Desa</a></h3>
                </div>
                <div class="post-prev-info">
                    JULE 10<span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                </div>
                <div class="post-prev-text">
                    Asap rokok semakin tebal di desa, menambah ancaman bagi kesehatan dan lingkungan. Dampaknya terasa pada kualitas udara dan generasi muda yang terpapar kebiasaan merokok sejak dini
                </div>
                <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                        <a href="{{ route('dt.canals') }}" class="blog-more">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 pb-70 canal-desc blog-list-ncs">
                <div class="post-prev-img pt-20">
                    <a href="{{ route('dt.canals') }}"><img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png"
                            alt="img"></a>
                </div>
                <div class="post-prev-title">
                    <h3 class="heading__title"><a href="{{ route('dt.canals') }}">Asap Rokok Makin Tebal di Desa</a></h3>
                </div>
                <div class="post-prev-info">
                    JULE 10<span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                </div>
                <div class="post-prev-text">
                    Asap rokok semakin tebal di desa, menambah ancaman bagi kesehatan dan lingkungan. Dampaknya terasa pada kualitas udara dan generasi muda yang terpapar kebiasaan merokok sejak dini
                </div>
                <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                        <a href="{{ route('dt.canals') }}" class="blog-more">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 pb-70 canal-desc blog-list-ncs">
                <div class="post-prev-img pt-20">
                    <a href="{{ route('dt.canals') }}"><img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png"
                            alt="img"></a>
                </div>
                <div class="post-prev-title">
                    <h3 class="heading__title"><a href="{{ route('dt.canals') }}">Asap Rokok Makin Tebal di Desa</a></h3>
                </div>
                <div class="post-prev-info">
                    JULE 10<span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                </div>
                <div class="post-prev-text">
                    Asap rokok semakin tebal di desa, menambah ancaman bagi kesehatan dan lingkungan. Dampaknya terasa pada kualitas udara dan generasi muda yang terpapar kebiasaan merokok sejak dini
                </div>
                <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                        <a href="{{ route('dt.canals') }}" class="blog-more">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 pb-70 canal-desc blog-list-ncs">
                <div class="post-prev-img pt-20">
                    <a href="{{ route('dt.canals') }}"><img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png"
                            alt="img"></a>
                </div>
                <div class="post-prev-title">
                    <h3 class="heading__title"><a href="{{ route('dt.canals') }}">Asap Rokok Makin Tebal di Desa</a></h3>
                </div>
                <div class="post-prev-info">
                    JULE 10<span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                </div>
                <div class="post-prev-text">
                    Asap rokok semakin tebal di desa, menambah ancaman bagi kesehatan dan lingkungan. Dampaknya terasa pada kualitas udara dan generasi muda yang terpapar kebiasaan merokok sejak dini
                </div>
                <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                        <a href="{{ route('dt.canals') }}" class="blog-more">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 pb-70 canal-desc blog-list-ncs">
                <div class="post-prev-img pt-20">
                    <a href="{{ route('dt.canals') }}"><img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png"
                            alt="img"></a>
                </div>
                <div class="post-prev-title">
                    <h3 class="heading__title"><a href="{{ route('dt.canals') }}">Asap Rokok Makin Tebal di Desa</a></h3>
                </div>
                <div class="post-prev-info">
                    JULE 10<span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                </div>
                <div class="post-prev-text">
                    Asap rokok semakin tebal di desa, menambah ancaman bagi kesehatan dan lingkungan. Dampaknya terasa pada kualitas udara dan generasi muda yang terpapar kebiasaan merokok sejak dini
                </div>
                <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                        <a href="{{ route('dt.canals') }}" class="blog-more">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 pb-70 canal-desc blog-list-ncs">
                <div class="post-prev-img pt-20">
                    <a href="{{ route('dt.canals') }}"><img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png"
                            alt="img"></a>
                </div>
                <div class="post-prev-title">
                    <h3 class="heading__title"><a href="{{ route('dt.canals') }}">Asap Rokok Makin Tebal di Desa</a></h3>
                </div>
                <div class="post-prev-info">
                    JULE 10<span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                </div>
                <div class="post-prev-text">
                    Asap rokok semakin tebal di desa, menambah ancaman bagi kesehatan dan lingkungan. Dampaknya terasa pada kualitas udara dan generasi muda yang terpapar kebiasaan merokok sejak dini
                </div>
                <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                        <a href="{{ route('dt.canals') }}" class="blog-more">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('jq-min-js')
    <script src="{{ asset('Assets') }}/JS/jquery-3.5.1.min.js" type="text/javascript" crossorigin="anonymous"></script>
@endpush
@push('js-plugin')
    <script src="{{ asset('Assets') }}/JS/plugin/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src='{{ asset('Assets') }}/JS/plugin/jquery.magnific-popup.min.js'></script>
    <script src="{{ asset('Assets') }}/JS/plugin/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('Assets') }}/JS/plugin/masonry.pkgd.min.js"></script>
    <script src="{{ asset('Assets') }}/JS/plugin/jquery.appear.js"></script>
    <script src="{{ asset('Assets') }}/JS/plugin/owl.carousel.min.js"></script>
    <script src="{{ asset('Assets') }}/JS/blog.js"></script>
@endpush
@push('js-custom')
@endpush