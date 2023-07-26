<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from preview.colorlib.com/theme/meranda/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 07:58:57 GMT -->
    <head>
        <title>Meranda &mdash; Website Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
        <link href="{{ asset('assets/css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!--<script nonce="9c20b9fa-40ec-44b9-812e-6d4e61a06917">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>-->
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 d-flex">
                            <a href="index-2.html" class="site-logo">
                            Meranda
                            </a>
                            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                        </div>
                        <div class="col-12 col-lg-6 ml-auto d-flex">
                            <div class="ml-md-auto top-social d-none d-lg-inline-block">
                                <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                            </div>
                            <form action="#" class="search-form d-inline-block">
                                <div class="d-flex">
                                    <input type="email" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-secondary"><span class="icon-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 d-block d-lg-none text-right"></div>
                    </div>
                </div>
                <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <nav class="site-navigation position-relative text-right" role="navigation">
                                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                        <li class="active">
                                            <a href="{{route('blog.home')}}" class="nav-link text-left">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog.category')}}" class="nav-link text-left">Categories</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog.all')}}" class="nav-link text-left">Posts</a>
                                        </li>
                                        <li><a href="{{route('blog.contact')}}" class="nav-link text-left">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
