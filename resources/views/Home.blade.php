@push('css-plugin')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Assets') }}/CSS/addt/upslider.css" />
@endpush
@extends('HeFo.header')
@section('content')
    <section class="slider">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
            data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
                <div class="bg-img"><img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" alt="slide img">
                </div>
                <section data-w-id="af609c91-8cc0-50e8-447d-1b93b74024a9" style="opacity:0" class="section mod--hero">
                    <div class="content">
                        <div class="col col--2 mod--hero">
                            <div class="dash-wrap mod--hero1">
                                <div style="width:0rem" class="dash-gorizont mod--hero"></div>
                            </div>
                            <div class="cnt-title">
                                <h1 class="text-align-center text-stroke-1_8 text-color-white mt-30">
                                    ASAP ROKOK
                                    MAKIN TEBAL
                                    DI DESA
                                </h1>
                            </div>
                            <div class="hero__grow">
                                <div class="hero__grow-by">
                                    <h3 class="text-color-white text-weight-normal desc-slider-main p-3 my-4">Asap rokok
                                        semakin tebal di desa, menambah ancaman bagi kesehatan dan lingkungan. Dampaknya
                                        terasa pada kualitas udara dan generasi muda yang terpapar kebiasaan merokok sejak
                                        dini.</h3>
                                </div>
                                <div class="dash-wrap mod--hero2">
                                    <div style="width:0rem" class="dash-gorizont mod--hero"></div>
                                </div>
                                <a data-anim="btn" href="#" class="btn mod--grow w-inline-block">
                                    <div class="overflow-hidden">
                                        <div class="overflow__vertical">
                                            <div class="overflow__txt">Selengkapnya</div>
                                            <div class="overflow__txt mod--absolute">Selengkapnya</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
                <div class="bg-img"><img
                        src="{{ asset('Assets') }}/Images/Article/Saling-Salip-PMN-dan-Dividen-1-1024x683.png"
                        alt="slide img">
                </div>
                <section data-w-id="af609c91-8cc0-50e8-447d-1b93b74024a9" style="opacity:0" class="section mod--hero">
                    <div class="content">
                        <div class="col col--2 mod--hero">
                            <div class="dash-wrap mod--hero1">
                                <div style="width:0rem" class="dash-gorizont mod--hero"></div>
                            </div>
                            <div class="cnt-title">
                                <h1 class="text-align-center text-stroke-1_8 text-color-white mt-30">
                                    SALING SALIP PMN DAN DIVIDEN
                                </h1>
                            </div>
                            <div class="hero__grow">
                                <div class="hero__grow-by">
                                    <h3 class="text-color-white text-weight-normal desc-slider-main p-3 my-4">Pertarungan
                                        antara PMN (Penyertaan Modal Negara) dan
                                        dividen semakin sengit. Apa yang terjadi ketika dana negara diputarbalikkan
                                        dalam bentuk PMN, sementara dividen jadi sorotan utama?</h3>
                                </div>
                                <div class="dash-wrap mod--hero2">
                                    <div style="width:0rem" class="dash-gorizont mod--hero"></div>
                                </div>
                                <a data-anim="btn" href="#" class="btn mod--grow w-inline-block">
                                    <div class="overflow-hidden">
                                        <div class="overflow__vertical">
                                            <div class="overflow__txt">Selengkapnya</div>
                                            <div class="overflow__txt mod--absolute">Selengkapnya</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="section mod--insights">
        <div class="content mt-30">
            <div class="trending-header text-font-archia text-stroke-0_5">OUR CHOICE</div>
            <div class="trending-items" id="trendingItems">
                <div class="trending-item">
                    <div class="trending-number">1</div>
                    <div class="trending-text">Asap Rokok Makin Tebal di Desa!!</div>
                </div>
                <div class="trending-item">
                    <div class="trending-number">2</div>
                    <div class="trending-text">Saling Salip PMN dan Dividen</div>
                </div>
                <div class="trending-item">
                    <div class="trending-number">3</div>
                    <div class="trending-text">Lancangnya Subsidi Gas Elpiji</div>
                </div>
                <div class="trending-item">
                    <div class="trending-number">4</div>
                    <div class="trending-text">Gairah Investasi di Pasar Modal Makin Lesu
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-layout5 banner-layout5-sticky bg-biru-donker bg-parallax pt-70 pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 d-flex flex-column justify-content-between pb-80">
                    <div class="heading heading-light sticky-top">
                        <h3 class="heading__title text-font-archia">Update
                        </h3>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
                    <div class="semi-banner bg-gray">
                        <div class="row row-no-gutter d-flex flex-wrap">
                            <div class="col-sm-6 order-2 order-md-2 bg-white">
                                <div class="semi-banner__content">
                                    <div class="heading">
                                        <h3 class="heading__title mb-30">Asap Rokok Makin Tebal di Desa!!</h3>
                                        <p class="blog-date">January 22, 2025</p>
                                        <p class="heading_desc mb-30">Asap rokok semakin tebal di desa, menambah ancaman
                                            bagi kesehatan dan lingkungan. Dampaknya terasa pada kualitas udara dan generasi
                                            muda yang terpapar kebiasaan merokok sejak dini. Apa yang bisa dilakukan untuk
                                            menghadapinya?
                                        </p>
                                        <a href="#" class="btn__link btn__white btn__icon px-0">
                                            <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 order-1 order-md-1 d-md-block">
                                <img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" alt="banner"
                                    class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="semi-banner bg-gray">
                        <div class="row row-no-gutter d-flex flex-wrap">
                            <div class="col-sm-6 order-1 order-md-2 d-md-block">
                                <img src="{{ asset('Assets') }}/Images/Article/Saling-Salip-PMN-dan-Dividen-1-1024x683.png"
                                    alt="banner" class="w-100">
                            </div>
                            <div class="col-sm-6 order-2 order-md-1 bg-white">
                                <div class="semi-banner__content">
                                    <div class="heading">
                                        <h3 class="heading__title mb-30">Saling Salip PMN dan Dividen</h3>
                                        <p class="blog-date">January 22, 2025</p>
                                        <p class="heading_desc mb-30">Pertarungan antara PMN (Penyertaan Modal Negara) dan
                                            dividen semakin sengit. Apa yang terjadi ketika dana negara diputarbalikkan
                                            dalam bentuk PMN, sementara dividen jadi sorotan utama? Simak lebih lanjut
                                            tentang dinamika ini!</p>
                                        <a href="#" class="btn__link btn__white btn__icon px-0">
                                            <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="semi-banner bg-gray">
                        <div class="row row-no-gutter d-flex flex-wrap">
                            <div class="col-sm-6 order-2 order-md-2 bg-white">
                                <div class="semi-banner__content">
                                    <div class="heading">
                                        <h3 class="heading__title mb-30">Lancangnya Subsidi Gas Elpiji</h3>
                                        <p class="blog-date">January 22, 2025</p>
                                        <p class="heading_desc mb-30">Subsidi gas elpiji semakin lancang, menimbulkan
                                            pertanyaan tentang efektivitasnya dalam mengendalikan harga dan memastikan
                                            distribusi yang merata. Meskipun bertujuan membantu masyarakat, kebijakan ini
                                            juga menghadapi tantangan besar terkait anggaran negara dan keberlanjutannya.
                                        </p>
                                        <a href="#" class="btn__link btn__white btn__icon px-0">
                                            <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 order-1 order-md-1 d-md-block">
                                <img src="{{ asset('Assets') }}/Images/Article/Lancangnya-Subsidi-Gas-Elpiji-1024x683.png"
                                    alt="banner" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="semi-banner bg-gray">
                        <div class="row row-no-gutter d-flex flex-wrap">
                            <div class="col-sm-6 order-1 order-md-2 d-md-block">
                                <img src="{{ asset('Assets') }}/Images/Article/lp7-sonoran-hero1-1024x683.jpg"
                                    alt="banner" class="w-100">
                            </div>
                            <div class="col-sm-6 order-2 order-md-1 bg-white">
                                <div class="semi-banner__content">
                                    <div class="heading">
                                        <h3 class="heading__title mb-30">Gairah Investasi di Pasar Modal Makin Lesu</h3>
                                        <p class="blog-date">January 22, 2025</p>
                                        <p class="heading_desc mb-30">Gairah investasi di pasar modal semakin lesu,
                                            dipengaruhi oleh ketidakpastian ekonomi global dan fluktuasi pasar yang tidak
                                            menentu. Banyak investor yang kini ragu untuk menanamkan modal mereka, sementara
                                            perekonomian membutuhkan dorongan lebih.</p>
                                        <a href="#" class="btn__link btn__white btn__icon px-0">
                                            <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <a data-anim="btn" data-w-id="191cbb4a-85b0-d8e6-910f-d785d9d3e9a6" href="#"
                        class="btn all-update sc-updt w-inline-block float-right m-4">
                        <div class="overflow-hidden">
                            <div class="overflow__vertical">
                                <div class="overflow__txt">Lihat Semua</div>
                                <div class="overflow__txt mod--absolute">Lihat Semua</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="title-container">
            <h1 class="text-font-archia">Insight</h1>
        </div>
        <div class="blog-container mx-auto">
            <div class="blog-item blog-item-large"
                style="background-image: url('{{ asset('Assets') }}/Images/Article/lp7-sonoran-hero1-1024x683.jpg');">
                <div class="blog-text-container">
                    <p class="blog-date">January 22, 2025</p>
                    <h2 class="blog-title">Asap Rokok Makin Tebal di Desa!!</h2>
                    <p class="blog-description">Dana yang dihabiskan masyarakat perdesaan untuk belanja rokok sudah
                        melampaui di kota, walaupun jumlah yang dihisap lebih sedikit.</p>
                </div>
            </div>
            <div class="blog-item blog-item-small"
                style="background-image: url('{{ asset('Assets') }}/Images/Article/Lancangnya-Subsidi-Gas-Elpiji-1024x683.png');">
                <div class="blog-text-container">
                    <p class="blog-date">January 15, 2025</p>
                    <h3 class="blog-title">Saling Salip PMN dan Dividen</h3>
                </div>
            </div>
            <div class="blog-item blog-item-small"
                style="background-image: url('{{ asset('Assets') }}/Images/Article/Saling-Salip-PMN-dan-Dividen-1-1024x683.png');">
                <div class="blog-text-container">
                    <p class="blog-date">January 17, 2025</p>
                    <h3 class="blog-title">Lancangnya Subsidi Gas Elpiji</h3>
                </div>
            </div>
            <div class="blog-layout-right">
                <div class="blog-image"
                    style="background-image: url('{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png');"></div>
                <div class="blog-text-container">
                    <p class="blog-date">December 18, 2024</p>
                    <h3 class="blog-title">Gairah Investasi di Pasar Modal Makin Lesu</h3>
                    <p class="blog-description">Kinerja aset keuangan milik investor individu di pasar modal kian melambat,
                        terjadi penyusutan pada kelompok beraset rendah.</p>
                </div>
            </div>
            <div class="blog-layout-right">
                <div class="blog-image"
                    style="background-image: url('{{ asset('Assets') }}/Images/Article/lp7-sonoran-hero1-1024x683.jpg');">
                </div>
                <div class="blog-text-container">
                    <p class="blog-date">December 3, 2024</p>
                    <h3 class="blog-title">Saling Salip PMN dan Dividen</h3>
                    <p class="blog-description">Pergerakan suntikan dana pemerintah melalui mekanisme PMN ke BUMN dengan
                        dividen seperti kereta luncur alias roller coster.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <a data-anim="btn" data-w-id="191cbb4a-85b0-d8e6-910f-d785d9d3e9a6" href="#"
                        class="btn all-update w-inline-block mt-20">
                        <div class="overflow-hidden">
                            <div class="overflow__vertical">
                                <div class="overflow__txt">Lihat Semua</div>
                                <div class="overflow__txt mod--absolute">Lihat Semua</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="featured_post_section_2 mt-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="heading heading-light mb-50 sticky-top">
                        <h3 class="heading__title text-font-archia mb-30">Research
                        </h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="feature_slider_active">
                        <div class="fs_sitem">
                            <div class="rc_meta">
                                <a href="#">12 Dec 2019</a>
                            </div>
                            <span class="cm_author">By<a href="#"> Janni Thomas</a></span>
                            <h3><a href="#">Secretart for Economic Air plane that looks like</a></h3>
                            <p class="desc-updates">Dana yang dihabiskan masyarakat perdesaan untuk
                                belanja rokok sudah melampaui di kota, walaupun jumlah yang dihisap lebih
                                sedikit.
                            </p>
                        </div>
                        <div class="fs_sitem">
                            <div class="rc_meta">
                                <a href="#">13 Dec 2019</a>
                            </div>
                            <span class="cm_author">By<a href="#"> Janni Thomas</a></span>
                            <h3><a href="#">Elsa and crew are back in a scarier, darker</a></h3>
                            <p class="desc-updates">Dana yang dihabiskan masyarakat perdesaan untuk
                                belanja rokok sudah melampaui di kota, walaupun jumlah yang dihisap lebih
                                sedikit.
                            </p>
                        </div>
                        <div class="fs_sitem">
                            <div class="rc_meta">
                                <a href="#">14 Dec 2019</a>
                            </div>
                            <span class="cm_author">By<a href="#"> Janni Thomas</a></span>
                            <h3><a href="#">Samsung Galaxy S10 listed for pre-order</a></h3>
                            <p class="desc-updates">Dana yang dihabiskan masyarakat perdesaan untuk
                                belanja rokok sudah melampaui di kota, walaupun jumlah yang dihisap lebih
                                sedikit.
                            </p>
                        </div>
                        <div class="fs_sitem">
                            <div class="rc_meta">
                                <a href="#">15 Dec 2019</a>
                            </div>
                            <span class="cm_author">By<a href="#"> Janni Thomas</a></span>
                            <h3><a href="#">Sate uncle Lift on Royals William win the Biggest Fans</a></h3>
                            <p class="desc-updates">Dana yang dihabiskan masyarakat perdesaan untuk
                                belanja rokok sudah melampaui di kota, walaupun jumlah yang dihisap lebih
                                sedikit.
                            </p>
                        </div>
                        <div class="fs_sitem">
                            <div class="rc_meta">
                                <a href="#">16 Dec 2019</a>
                            </div>
                            <span class="cm_author">By<a href="#"> Janni Thomas</a></span>
                            <h3><a href="#">Asus Xonar U7 sound card has a built in Headphone</a></h3>
                            <p class="desc-updates">Dana yang dihabiskan masyarakat perdesaan untuk
                                belanja rokok sudah melampaui di kota, walaupun jumlah yang dihisap lebih
                                sedikit.
                            </p>
                        </div>
                    </div>
                    <div class="feature_item_slide">
                        <div class="f_sitem" data-item="1">
                            <img src="{{ asset('Assets') }}/Images/Article/lp7-sonoran-hero1-1024x683.jpg"
                                alt="" />
                        </div>
                        <div class="f_sitem" data-item="2">
                            <img src="{{ asset('Assets') }}/Images/Article/Lancangnya-Subsidi-Gas-Elpiji-1024x683.png"
                                alt="" />
                        </div>
                        <div class="f_sitem" data-item="3">
                            <img src="{{ asset('Assets') }}/Images/Article/Saling-Salip-PMN-dan-Dividen-1-1024x683.png"
                                alt="" />
                        </div>
                        <div class="f_sitem" data-item="4">
                            <img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" alt="" />
                        </div>
                        <div class="f_sitem" data-item="5">
                            <img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" alt="" />
                        </div>
                    </div>
                    <div class="counting_bar">
                        <h1>1.</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <a data-anim="btn" data-w-id="191cbb4a-85b0-d8e6-910f-d785d9d3e9a6" href="#"
                        class="btn all-update w-inline-block float-right mr-50 mt-30 mb-30">
                        <div class="overflow-hidden">
                            <div class="overflow__vertical">
                                <div class="overflow__txt">Lihat Semua</div>
                                <div class="overflow__txt mod--absolute">Lihat Semua</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="portfolio-carousel mt-100">
        <div class="content">
            <div class="heading mb-70">
                <div class="d-flex align-items-center">
                    <div class="divider divider-primary mr-30"></div>
                    <h2 class="heading__subtitle mb-0">Latest Case Studies</h2>
                </div>
                <h3 class="heading__title mb-0">We provide solutions to big & small organizations</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-carousel-wrapper">
                        <div class="slick-carousel"
                            data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 768, "settings": {"slidesToShow": 1}}, {"breakpoint": 570, "settings": {"slidesToShow": 1}}]}'>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png"
                                        alt="portfolio img">
                                    <div class="portfolio__hover">
                                        <a class="portfolio__icon" href="case-studies-single.html">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="{{ asset('Assets') }}/Images/Article/Saling-Salip-PMN-dan-Dividen-1-1024x683.png"
                                        alt="portfolio img">
                                    <div class="portfolio__hover">
                                        <a class="portfolio__icon" href="case-studies-single.html">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="{{ asset('Assets') }}/Images/Article/lp7-sonoran-hero1-1024x683.jpg"
                                        alt="portfolio img">
                                    <div class="portfolio__hover">
                                        <a class="portfolio__icon" href="case-studies-single.html">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="{{ asset('Assets') }}/Images/Article/Lancangnya-Subsidi-Gas-Elpiji-1024x683.png"
                                        alt="portfolio img">
                                    <div class="portfolio__hover">
                                        <a class="portfolio__icon" href="case-studies-single.html">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="{{ asset('Assets') }}/Images/Article/lp7-sonoran-hero1-1024x683.jpg"
                                        alt="portfolio img">
                                    <div class="portfolio__hover">
                                        <a class="portfolio__icon" href="case-studies-single.html">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png"
                                        alt="portfolio img">
                                    <div class="portfolio__hover">
                                        <a class="portfolio__icon" href="case-studies-single.html">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section data-w-id="ac41eadb-5057-a476-2d9a-f87bc505ffbe" class="section overflow-hidden">
        <div class="content">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="heading mb-50 mt-50 text-center">
                    <h3 class="heading__title mb-30">APBN & Inflasi
                    </h3>
                </div>
            </div>
            <div data-swiper="article" class="swiper mod--article">
                <div class="swiper-wrapper">
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article active"><img
                                    src="{{ asset('Assets') }}/Images/Article/Saling-Salip-PMN-dan-Dividen-1-1024x683.png"
                                    loading="eager" sizes="65vw" width="1240" height="1754" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc active">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc active">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc active">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/Lancangnya-Subsidi-Gas-Elpiji-1024x683.png"
                                    loading="eager" sizes="65vw" width="864" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/lp7-sonoran-hero1-1024x683.jpg"
                                    loading="eager" sizes="65vw" width="864" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" loading="eager"
                                    sizes="65vw" width="864" alt="" class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article active"><img
                                    src="{{ asset('Assets') }}/Images/Article/Saling-Salip-PMN-dan-Dividen-1-1024x683.png"
                                    loading="eager" sizes="65vw" width="1240" height="1754" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc active">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc active">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc active">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/Lancangnya-Subsidi-Gas-Elpiji-1024x683.png"
                                    loading="eager" sizes="65vw" width="864" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/lp7-sonoran-hero1-1024x683.jpg"
                                    loading="eager" sizes="65vw" width="864" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" loading="eager"
                                    sizes="65vw" width="864" alt="" class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article active"><img
                                    src="{{ asset('Assets') }}/Images/Article/Saling-Salip-PMN-dan-Dividen-1-1024x683.png"
                                    loading="eager" sizes="65vw" width="1240" height="1754" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc active">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc active">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc active">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/Lancangnya-Subsidi-Gas-Elpiji-1024x683.png"
                                    loading="eager" sizes="65vw" width="864" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/lp7-sonoran-hero1-1024x683.jpg"
                                    loading="eager" sizes="65vw" width="864" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" loading="eager"
                                    sizes="65vw" width="864" alt="" class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article active"><img
                                    src="{{ asset('Assets') }}/Images/Article/Saling-Salip-PMN-dan-Dividen-1-1024x683.png"
                                    loading="eager" sizes="65vw" width="1240" height="1754" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc active">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc active">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc active">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/Lancangnya-Subsidi-Gas-Elpiji-1024x683.png"
                                    loading="eager" sizes="65vw" width="864" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/lp7-sonoran-hero1-1024x683.jpg"
                                    loading="eager" sizes="65vw" width="864" alt=""
                                    class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--article">
                        <div class="article__slide">
                            <div data-anim-article="img" class="overflow-hidden mod--article"><img
                                    src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" loading="eager"
                                    sizes="65vw" width="864" alt="" class="img mod--article" /></div>
                            <div data-anim-article="desc" class="text-wrap mod--article-desc">
                                <div
                                    class="text-size-32 text-font-archia text-stroke-0_5 text-align-center flex-centeral-vertical">
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">Creative data</div>
                                            <div class="overflow__txt mod--absolute">Creative data</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-anim-article="desc" class="overflow__vertical mod--article-desc">
                                            <div class="overflow__txt">construction</div>
                                            <div class="overflow__txt mod--absolute">construction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-swiper="next-article" data-anim="btn" data-w-id="52bd713b-dd35-c1fc-ae55-34d6d52869b8"
                class="btn-overlay mod--article">
                <div class="btn__content">
                    <div class="text-style-allcaps text-weight-bold text-letterspacing-0_03">
                        <div class="overflow-hidden">
                            <div class="overflow__vertical" style="color: white">
                                <div class="overflow__txt">Rilis</div>
                                <div class="overflow__txt mod--absolute">Rilis</div>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <div class="overflow__vertical" style="color: white">
                                <div class="overflow__txt">Selanjutnya</div>
                                <div class="overflow__txt mod--absolute">Selanjutnya</div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <div class="overflow__gorizontal"><img
                                src="https://cdn.prod.website-files.com/637614467ad6ef67f0af2c24/637760e569ad6ce73e198aa1_ico-arrow-right.svg"
                                loading="lazy" alt="" class="img mod--arrow-link" /><img
                                src="https://cdn.prod.website-files.com/637614467ad6ef67f0af2c24/637760e569ad6ce73e198aa1_ico-arrow-right.svg"
                                loading="lazy" alt="" class="img mod--arrow-link mod--absolute" /></div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagin-wrap">
                <div data-swiper="pagination-article" class="swiper-pagination mod--article">
                    <div class="swiper-pagination-bullet swiper-pagination-bullet-active"></div>
                    <div class="swiper-pagination-bullet"></div>
                    <div class="swiper-pagination-bullet"></div>
                    <div class="swiper-pagination-bullet"></div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="section mod--slider--mgz">
        <div class="title-container">
            <h1 class="text-font-archia">Next Brief</h1>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper mb-30">
                <div class="swiper-slide">
                    <img src="{{ asset('Assets') }}/Images/about/1.jpg" alt="about">
                    <blockquote class="blockquote d-flex align-items-end mb-0">
                        <div class="blockquote__content">
                            <h4 class="blockquote__title mb-0">As one of the world's largest ITService Providers
                                with
                                over 120
                                engineers and IT support staff are ready to help.
                            </h4>
                            <a href="#" class="btn__link btn__white btn__icon mt-10 px-0">
                                <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </blockquote>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('Assets') }}/Images/about/1.jpg" alt="about">
                    <blockquote class="blockquote d-flex align-items-end mb-0">
                        <div class="blockquote__content">
                            <h4 class="blockquote__title mb-0">As one of the world's largest ITService Providers
                                with
                                over 120
                                engineers and IT support staff are ready to help.
                            </h4>
                            <a href="#" class="btn__link btn__white btn__icon mt-10 px-0">
                                <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </blockquote>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('Assets') }}/Images/about/1.jpg" alt="about">
                    <blockquote class="blockquote d-flex align-items-end mb-0">
                        <div class="blockquote__content">
                            <h4 class="blockquote__title mb-0">As one of the world's largest ITService Providers
                                with
                                over 120
                                engineers and IT support staff are ready to help.
                            </h4>
                            <a href="#" class="btn__link btn__white btn__icon mt-10 px-0">
                                <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </blockquote>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('Assets') }}/Images/about/1.jpg" alt="about">
                    <blockquote class="blockquote d-flex align-items-end mb-0">
                        <div class="blockquote__content">
                            <h4 class="blockquote__title mb-0">As one of the world's largest ITService Providers
                                with
                                over 120
                                engineers and IT support staff are ready to help.
                            </h4>
                            <a href="#" class="btn__link btn__white btn__icon mt-10 px-0">
                                <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </blockquote>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('Assets') }}/Images/about/1.jpg" alt="about">
                    <blockquote class="blockquote d-flex align-items-end mb-0">
                        <div class="blockquote__content">
                            <h4 class="blockquote__title mb-0">As one of the world's largest ITService Providers
                                with
                                over 120
                                engineers and IT support staff are ready to help.
                            </h4>
                            <a href="#" class="btn__link btn__white btn__icon mt-10 px-0">
                                <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </blockquote>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
@endsection
@push('jq-min-js')
    <script src="{{ asset('Assets') }}/JS/jquery-3.5.1.min.js" type="text/javascript" crossorigin="anonymous"></script>
@endpush
@push('own-page')
    <script src="{{ asset('Assets') }}/JS/ncs.min.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        window.REMODAL_GLOBALS = {
            DEFAULTS: {
                hashTracking: false
            }
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" type="text/javascript">
    </script>
@endpush
@push('js-plugin')
    <script src="{{ asset('Assets') }}/JS/addt/slick.js"></script>
    <script src="{{ asset('Assets') }}/JS/addt/owl.carousel.min.js"></script>
    <script src="{{ asset('Assets') }}/JS/addt/upslider.js"></script>
    <script>
        var swiper = new Swiper(".swiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true
            },
            keyboard: {
                enabled: true
            },
            mousewheel: {
                thresholdDelta: 70
            },
            spaceBetween: 60,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            }
        });
    </script>
    <script async src="{{ asset('Assets') }}/JS/custom.js"></script>
@endpush
@push('js-custom')
@endpush
