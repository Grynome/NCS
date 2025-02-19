<!DOCTYPE html>
<html data-wf-page="637614467ad6efcd6baf2c25"
    data-wf-status="1">
<head>
    <meta charset="utf-8" />
    <title>Databest landing page</title>
    <meta content="Databest landing page" property="og:title" />
    <meta content="https://cdn.prod.website-files.com/637614467ad6ef67f0af2c24/637617df8171bc04d5751fef_opengraph.jpg"
        property="og:image" />
    <meta content="Databest landing page" property="twitter:title" />
    <meta content="https://cdn.prod.website-files.com/637614467ad6ef67f0af2c24/637617df8171bc04d5751fef_opengraph.jpg"
        property="twitter:image" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('Assets') }}/CSS/libraries.css" rel="stylesheet" type="text/css" />
    @stack('css-plugin')
    <link href="{{ asset('Assets') }}/CSS/ncs.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Assets') }}/Images/favicon-nobg.png" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('Assets') }}/Images/favicon-nobg.png" rel="apple-touch-icon" />
</head>
<body>
    </div>
    <!-- =========================
    Header
    =========================== -->
    <header class="header header-transparent border-bottom">
        <nav class="navbar navbar-expand-lg sticky-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('Assets') }}/Images/Untitled-2.png" class="logo-light icon-ncs" alt="logo">
                    <img src="{{ asset('Assets') }}/Images/Untitled-1.png" class="logo-dark icon-ncs"
                        alt="logo">
                </a>
                <button class="navbar-toggler" type="button">
                    <span class="menu-lines"><span></span></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav__item">
                            <a href="{{ route('home') }}" class="nav__item-link active">Home</a>
                        </li>
                        <li class="nav__item ">
                            <a href="{{ route('insight') }}" class="nav__item-link">Insight</a>
                        </li>
                        <li class="nav__item ">
                            <a href="{{ route('research') }}" class="nav__item-link">Research</a>
                        </li>
                        <li class="nav__item ">
                            <a href="{{ route('update') }}" class="nav__item-link">Update</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('about.us') }}" class="nav__item-link">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="main">
        @yield('content')
    </main>
    @extends('HeFo.footer')