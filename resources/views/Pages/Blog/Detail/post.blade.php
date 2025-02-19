@push('css-plugin')
    <link href="{{ asset('Assets') }}/CSS/article/Detail/layout.css" rel="stylesheet" />
    <style>
        body {
            display: grid;
            grid-template-rows: auto 1fr auto;
            /* Header, Main (Article), Footer */
            grid-template-columns: 1fr;
            min-height: 100vh;
            /* Ensure it takes the full height of the viewport */
        }

        header,
        footer {
            grid-column: 1 / -1;
            /* Make sure they span full width */
        }

        .article-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            margin-bottom: 10px;
            flex-wrap: wrap;
            /* Memungkinkan elemen turun ke bawah jika tidak cukup ruang */
        }

        .author-text {
            font-size: 14px;
            color: #555;
            flex: 1;
            /* Biarkan teks penulis mengisi ruang yang tersedia */
            min-width: 200px;
        }

        .author-text span {
            color: #0073e6;
            text-decoration: none;
            font-weight: bold;
        }

        .download-options {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            /* Membuat tombol bisa turun ke baris berikutnya jika perlu */
            justify-content: flex-end;
            /* Menjaga tombol tetap di kanan */
        }

        .option-button {
            border: none;
            background: none;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 5px 10px;
            white-space: nowrap;
            /* Mencegah tombol terpotong */
        }

        .option-button:hover {
            color: #0073e6;
        }

        /* ✅ RESPONSIVE STYLES */
        @media screen and (max-width: 600px) {
            .article-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .download-options {
                width: 100%;
                justify-content: flex-start;
                margin-top: 10px;
            }

            .option-button {
                font-size: 12px;
                padding: 5px;
            }
        }

        .popular-insights {
            position: relative;
            right: 2%;
            padding: 3px;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .popular-insights h3 {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .popular-insights hr {
            border: none;
            height: 1px;
            background: #ccc;
            margin-bottom: 10px;
        }

        .popular-insights ol {
            margin-top: 10px;
            padding-left: 20px;
        }

        .popular-insights li {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 12px;
        }

        .popular-insights li a {
            text-decoration: none;
            color: black;
            transition: color 0.3s ease, text-decoration 0.3s ease;
        }

        .popular-insights li a:hover {
            color: blue;
            text-decoration: underline;
        }

        @media screen and (max-width: 768px) {
            article {
                width: 100%;
                margin-right: 0;
                float: none;
            }

            .popular-insights {
                position: relative;
                top: auto;
                right: auto;
                transform: none;
                padding: 10px;
                border-radius: 8px;
            }

            .popular-insights li {
                font-size: 14px;
                line-height: 1.8;
            }
        }

        .img-wrapper-dtArticle {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            max-width: 1024px;
        }

        .img-dtArticle {
            width: 100%;
            display: block;
            border-radius: 8px;
        }

        .caption-img-dtArticle {
            margin-top: 5px;
            color: #555;
            font-size: 14px;
            font-style: italic;
            text-align: left;
            padding-left: 5px;
        }

        .lede {
            font-size: 1.2rem;
            font-weight: 600;
            font-style: italic;
            color: #444;
            padding: 12px 16px;
            border-left: 5px solid #ef435c;
            border-radius: 8px;
            margin: 10px 0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .lede:hover {
            border-left-color: #0f2339;
            transform: scale(1.01);
        }

        @media (max-width: 768px) {
            .lede {
                font-size: 1rem;
                padding: 10px 14px;
            }
        }

        .download-section {
            margin-top: 20px;
            padding-top: 10px;
        }

        .download-section hr {
            border: none;
            border-top: 1px solid #000;
            margin-bottom: 10px;
        }

        .download-section h3 {
            font-size: 16px;
            font-weight: bold;
            color: #000;
            padding-top: 24px;
            margin-bottom: 24px;
        }

        .download-link {
            display: flex;
            align-items: center;
            font-size: 1rem;
            color: blue;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }

        .download-link i {
            margin-right: 5px;
            font-size: 1.2rem;
        }

        .download-link:hover {
            color: darkblue;
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .download-link {
                font-size: 0.9rem;
            }
        }
    </style>
@endpush
@extends('HeFo.header')
@section('content')
    <article class="post">
        <div class="article-header">
            <p class="author-text">
                By <span>Lorem Ipsum</span>
            </p>
            <div class="download-options">
                <button class="option-button">
                    <i class="fas fa-share-alt"></i> Share
                </button>
                <button class="option-button" onclick="downloadFile()">
                    <i class="fas fa-download"></i> Download
                </button>
            </div>
        </div>
        <h2>Chapter Three: The Great American Game</h2>
        <div class="download-section">
            <hr>
            <h3>DOWNLOADS</h3>
            <a href="path-to-your-file.pdf" class="download-link" download>
                <i class="fas fa-arrow-down"></i> Article (6 pages)
            </a>
        </div>
        <p class="lede">
            Beneath the roaring crowds and floodlit diamonds, the Great American Game is more than just a pastime—it’s a
            battle of wits, grit, and heart.
        </p>
        <div class="popular-insights">
            <h3>MOST POPULAR INSIGHTS</h3>
            <hr>
            <ol>
                <li><a href="#">Superagency in the workplace: Empowering people to unlock AI’s full potential</a></li>
                <li><a href="#">The CEO as elite athlete: What business leaders can learn from modern sports</a></li>
                <li><a href="#">McKinsey Quarterly: 60th birthday edition</a></li>
                <li><a href="#">Special episode: Debriefing Davos 2025</a></li>
            </ol>
        </div>
        <div class="img-wrapper-dtArticle">
            <img src="{{ asset('Assets') }}/Images/Article/Saling-Salip-PMN-dan-Dividen-1-1024x683.png" alt="banner"
                class="img-dtArticle">
            <p class="caption-img-dtArticle">Keterangan foto: Lorem Ipsum</p>
        </div>
        <p>Dear Diary,</p>
        <p>Grandfather's creaky as his front porch, loads his shotgun beneath the awning, spittoon restless for rain,
            carpenter's
            chair against the whistling air. Rocking, back and forth, rocking snap shot picture - worth it, just like
            the movies</p>
        <p>She said that he loved baseball, and James Earl Jones; said that he's got god talking inside of his thoughts
            while he's
            rounding those bases on his way back home</p>
        <p>If you build it, they will come (and baby listens to what the Lord say). But I've been getting pretty worn,
            building for
            nearly a decade</p>
        <p>In a perfect world we shouldn’t have been allowed to lose sight of what it means to love wholly. I’ve got a
            Polaroid hanging
            on my wall that a friend took of me and my angel. I remember the day like it’s something I can touch, but
            it’s stuck
            in the square between the borders of the film, and I can run my fingers over our faces, but I can’t get back
            to the places
            we were</p>
        <blockquote class="tip-left">
            <p>You’ve got a pain deep in your bones, son.</p>
        </blockquote>
        <p>"You’ve got a pain deep in your bones, son. It compels you forward like you’re tied to a slave master’s cruel
            hand, and
            it's the same pain that drives that oppressor’s heart of stone, so you’ve grown to love the man. You keep
            pouring yourself
            out, again and again, into legible lines through a crooked pen." Yeah, it’s painful, but it’s familiar – so
            habit breeds
            comfort, and I don’t know what I’d do without him</p>
        <p>So in the early morning, when you’ve fallen asleep in our home, I drift back into the memories that I’ve
            claimed as my
            own, and wonder if tonight will be a night I’ll hang on my wall like I did before we stopped taking photos,
            out of the
            habit of being comfortable with not trying at all</p>
        <p>In a perfect world, we’ll have albums labeled Seasons, with chapter headings, and we’ll staple them to the
            cork-board that
            hangs at the foot of the bed. There’s longevity in a memory spilt out in pen, and if a picture is worth a
            thousand words
            then I’ve written down every one of them</p>
        <p>I work hard, scarred, toil through that soil for the youth I see in my friends, but these journals are
            moments in time,
            snapshots of our lives, and in retrospect, age is an overexposed photo that the memories can't mend</p>
        <p>I know my sweet seductress, and her name is Depression. I wrote best beneath that demon’s destructive
            oppression</p>
        <p>In those Polaroids, she drove the ink into the canvas like a slave beneath his master’s cruel hand, and I
            hated that whip
            but always wondered what I’d do without it, so I grew to love the man</p>
        <p>Oh, I wept for change! I begged for movement and the good Lord, he answered my prayers, but you don’t know
            how to breathe
            easy when you let go of your habits, even if your comforts left you gasping for air</p>
        <h2>Dear Time</h2>
        <p>Grandfather's as creaky as his front porch, scent like oil in the gun barrel, dip-can kicked over the
            railing, sandpaper
            hands stuck behind thumb tacks on my wall. I’ve got an ache in my chest for every season I miss and it gets
            worse when
            the snow starts to fall. There are butterflies alive in that couple’s eyes a few years since forgotten by
            all, and sometimes,
            if the phone starts to ring, I can still hear their wings when you call</p>
        <p>But I begged for movement and I got what I asked for, and I can picture the answer like it came yesterday.
            And in the land
            of the gods, I think that things are timeless, but we are still prone to decay</p>
        <p>You know I still lift up hope of certain smiles in those photos for us when I pray</p>
        <blockquote class="tip-left">
            <p>"Idle hands build nothing that you can call your own"</p>
        </blockquote>
        <p>Time is a cruel lover, and she breaks her house apart at its bones. You know comfort is no good reason for
            standing still,
            and idle hands build nothing that you can call your own.</p>
        <p>Oh, I wept for change! I begged for movement and the good Lord, he answered my prayers, but you don’t know
            how to breathe
            easy when you let go of your habits, even if your comforts left you gasping for air</p>
        <p>Grandfather's as creaky as his front porch, scent like oil in the gun barrel, dip-can kicked over the
            railing, sandpaper
            hands stuck behind thumb tacks on my wall. I’ve got an ache in my chest for every season I miss and it gets
            worse when
            the snow starts to fall. There are butterflies alive in that couple’s eyes a few years since forgotten by
            all, and sometimes,
            if the phone starts to ring, I can still hear their wings when you call</p>
    </article>
    <section class="blog-grid pb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h3 class="heading__title">Related Articles</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="blog-single-post.html">
                                <img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" alt="blog image">
                            </a>
                        </div>
                        <div class="post__content">
                            <div class="post__meta d-flex flex-wrap">
                                <div class="post__meta-cat">
                                    <a href="#">Consulting</a><a href="#">Sales</a>
                                </div>
                                <span class="post__meta-date">May 13, 2020</span>
                            </div>
                            <h4 class="heading__title"><a href="#">Five Ways to Develop a World Class Sales Operations
                                    Function</a>
                            </h4>
                            <p class="post__desc">Outsourcing IT infrastructure is a concept that has been around for a
                                while.
                                Characterized in terms of technicians and engineers, workstations and servers, the idea of
                                outsourcing
                                your basic IT needs...
                            </p>
                            <a href="#" class="btn__link btn__white btn__icon px-0">
                                <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="blog-single-post.html">
                                <img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" alt="blog image">
                            </a>
                        </div>
                        <div class="post__content">
                            <div class="post__meta d-flex flex-wrap">
                                <div class="post__meta-cat">
                                    <a href="#">Tech</a><a href="#">Communications</a>
                                </div>
                                <span class="post__meta-date">April 17, 2020</span>
                            </div>
                            <h4 class="heading__title"><a href="#">Succession Risks That Threaten Your Leadership
                                    Strategy</a>
                            </h4>
                            <p class="post__desc">Today’s organizations need a quality bench of leaders to drive business
                                outcomes and satisfy employees, customers and investors who now demand more transparency and
                                accountability...
                            </p>
                            <a href="#" class="btn__link btn__white btn__icon px-0">
                                <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="blog-single-post.html">
                                <img src="{{ asset('Assets') }}/Images/Article/ROKOK-1024x683.png" alt="blog image">
                            </a>
                        </div>
                        <div class="post__content">
                            <div class="post__meta d-flex flex-wrap">
                                <div class="post__meta-cat">
                                    <a href="#">Digital Business</a><a href="#">Cloud</a>
                                </div>
                                <span class="post__meta-date">March 20, 2020</span>
                            </div>
                            <h4 class="heading__title"><a href="#">What Do Employee Engagement Surveys Tell You About
                                    Employee?</a>
                            </h4>
                            <p class="post__desc">Outsourcing IT infrastructure is a concept that has been around for a
                                while.
                                Characterized in terms of technicians and engineers, workstations and servers, the idea of
                                outsourcing
                                your basic IT needs...
                            </p>
                            <a href="#" class="btn__link btn__white btn__icon px-0">
                                <span class="mr-5">Selengkapnya</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
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
@endpush
@push('js-custom')
@endpush
