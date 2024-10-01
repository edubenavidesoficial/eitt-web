<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Eitt - Educación de Innovación</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- select2 -->
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head> 
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <img src="assets/images/icons/preloader.gif" alt="">
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block">
    <button type="button" class="close-button"><i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="/" class="mobile-menu__logo">
            <img src="assets/images/logo/logo.png" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            
<ul class="nav-menu flex-align nav-menu--mobile">
    <li class="nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Inicio</a>
        <ul class="nav-submenu scroll-sm">
            <li class="nav-submenu__item">
                <a href="nosotros" class="nav-submenu__link hover-bg-neutral-30"> Nosotros</a>
            </li>
            <li class="nav-submenu__item">
                <a href="preguntas" class="nav-submenu__link hover-bg-neutral-30"> Pregúntas</a>
            </li>
           
        </ul>
    </li>
    <li class="nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Cursos</a>
         <ul class="nav-submenu scroll-sm">
            <li class="nav-submenu__item">
                <a href="cursos#docentes" class="nav-submenu__link hover-bg-neutral-30"> Docentes Ecuador</a>
            </li>
            <li class="nav-submenu__item">
                <a href="cursos#universidad" class="nav-submenu__link hover-bg-neutral-30"> Ingreso Universitario</a>
            </li>
            
        </ul>
    </li>
    <li class="nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="nav-submenu scroll-sm">
            <li class="nav-submenu__item">
                <a href="#" class="nav-submenu__link hover-bg-neutral-30"> Notícias</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contactos" class="nav-menu__link">Contactos</a>
    </li>
</ul>

            <div class="d-sm-none d-block mt-24">
                <div class="header-select border border-neutral-30 bg-main-25 rounded-pill position-relative">
    <span class="select-icon position-absolute top-50 translate-middle-y inset-inline-start-0 z-1 ms-lg-4 ms-12 text-xl pointer-event-none d-flex">
        <i class="ph-bold ph-squares-four"></i>
    </span>
    <select class="js-example-basic-single border-0" name="state">
    <option value="1" selected disabled>Educación</option>
        <option value="1">DocentSuit</option>
        <option value="1">PreUniversitario</option>
        <option value="1">Planificaciones</option>
    </select>
</div>
            </div>
            
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->


    <!-- ==================== Header Start Here ==================== -->
<header class="header">
    <div class="container container--xl">
        <nav class="header-inner flex-between gap-8">

            <div class="header-content-wrapper flex-align flex-grow-1">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="/" class="link">
                        <img src="assets/images/logo/logo.png" alt="Logo">
                    </a>
                </div>
                <!-- Logo End  -->
    
                <!-- Select Start -->
                <div class="d-sm-block d-none">
                    <div class="header-select border border-neutral-30 bg-main-25 rounded-pill position-relative">
    <span class="select-icon position-absolute top-50 translate-middle-y inset-inline-start-0 z-1 ms-lg-4 ms-12 text-xl pointer-event-none d-flex">
        <i class="ph-bold ph-squares-four"></i>
    </span>
    <select class="js-example-basic-single border-0" name="state">
        <option value="1" selected disabled>Educación</option>
        <option value="1">DocentSuit</option>
        <option value="1">PreUniversitario</option>
        <option value="1">Planificaciones</option>
    </select>
</div>
                </div>
                <!-- Select End -->
    
                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    
<ul class="nav-menu flex-align ">
    <li class="nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Inicio</a>
        <ul class="nav-submenu scroll-sm">
            <li class="nav-submenu__item">
                <a href="nosotros" class="nav-submenu__link hover-bg-neutral-30">Nosotros</a>
            </li>
            <li class="nav-submenu__item">
                <a href="preguntas" class="nav-submenu__link hover-bg-neutral-30">Pregúntas</a>
            </li>
           
        </ul>
    </li>
    <li class="nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Cursos</a>
         <ul class="nav-submenu scroll-sm">
            <li class="nav-submenu__item">
                <a href="cursos#docentes" class="nav-submenu__link hover-bg-neutral-30">Docentes Ecuador</a>
            </li>
            <li class="nav-submenu__item">
                <a href="cursos#universidad" class="nav-submenu__link hover-bg-neutral-30"> Ingreso Universitario</a>
            </li>
        </ul>
    </li>
   
    <li class="nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="nav-submenu scroll-sm">
            <li class="nav-submenu__item">
                <a href="#" class="nav-submenu__link hover-bg-neutral-30"> Notícias</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contactos" class="nav-menu__link">Contactos</a>
    </li>
</ul>
                </div>
                <!-- Menu End  -->
            </div>

            <!-- Header Right start -->
            <div class="header-right flex-align">
                <form action="#" class="search-form position-relative d-xl-block d-none">
                    <input type="text" class="common-input rounded-pill bg-main-25 pe-44 border-neutral-30" placeholder="Buscar...">
                    <button type="submit" class="w-36 h-36 bg-main-600 hover-bg-main-700 rounded-circle flex-center text-md text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
                        <i class="ph-bold ph-magnifying-glass"></i>
                    </button>
                </form>
                <a href="plataformas" class="info-action w-52 h-52 bg-main-25 hover-bg-main-600 border border-neutral-30 rounded-circle flex-center text-2xl text-neutral-500 hover-text-white hover-border-main-600">
                    <i class="ph ph-user-circle"></i>
                </a>
                <button type="button" class="toggle-mobileMenu d-lg-none text-neutral-200 flex-center">
                    <i class="ph ph-list"></i> 
                </button>
            </div>
            <!-- Header Right End  -->
        </nav>
    </div>
</header>