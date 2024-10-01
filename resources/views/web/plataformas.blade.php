@include('web.layout.header')
<!-- ==================== Breadcrumb Start Here ==================== -->
<section class="breadcrumb py-120 bg-main-25 position-relative z-1 overflow-hidden mb-0">
    <img src="assets/images/shapes/shape1.png" alt="" class="shape one animation-rotation d-md-block d-none">
    <img src="assets/images/shapes/shape2.png" alt="" class="shape two animation-scalation d-md-block d-none">
    <img src="assets/images/shapes/shape3.png" alt="" class="shape eight animation-walking d-md-block d-none">
    <img src="assets/images/shapes/shape5.png" alt="" class="shape six animation-walking d-md-block d-none">
    <img src="assets/images/shapes/shape4.png" alt="" class="shape four animation-scalation">
    <img src="assets/images/shapes/shape4.png" alt="" class="shape nine animation-scalation">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb__wrapper">
                    <h1 class="breadcrumb__title display-4 fw-semibold text-center"> PLATAFORMAS</h1>
                    <ul class="breadcrumb__list d-flex align-items-center justify-content-center gap-4">
                        <li class="breadcrumb__item">
                            <a href="/" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium"> 
                                <i class="text-lg d-inline-flex ph-bold ph-house"></i> Inicio</a>
                         </li>
                        <li class="breadcrumb__item">
                            <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                        </li>
                        <li class="breadcrumb__item">
                            <a href="cursos" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium"> </a> 
                        </li>
                        <li class="breadcrumb__item d-none">
                            <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                        </li>
                        <li class="breadcrumb__item"> 
                            <span class="text-main-two-600"> Plataformas </span> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcrumb End Here ==================== -->

<div class="account py-120 position-relative">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <div class="bg-main-25 border border-neutral-30 rounded-8 p-32">
                    <div class="mb-40">
                    <h3 class="mb-16 text-neutral-500">Plataforma Docentes</h3>
                        <p class="text-neutral-500">Plataforma de calificación y cursos docentes</p>
                    </div>
                    <div class="mt-40">
                        <a href="https://docensuit.e-itt.com/" class="btn btn-main rounded-pill flex-center gap-8 mt-40">
                            Iniciar Sesión en DOCENT-SUIT
                            <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                        </a>
                    </div>
                </div>
                <BR>
                <div class="bg-main-25 border border-neutral-30 rounded-8 p-32">
                    <div class="mb-40">
                        <h3 class="mb-16 text-neutral-500">Plataforma Estudiantes</h3>
                        <p class="text-neutral-500">Plataforma de ingreso universitario</p>
                    </div>
                    <div class="mt-40">
                        <a href="https://virtual.e-itt.com/" class="btn btn-main rounded-pill flex-center gap-8 mt-40">
                            Iniciar Sesión en AULA-U
                            <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-lg-block d-none">
                <div class="account-img">
                    <img src="assets/images/thumbs/account-img.png" alt="Imagen de cuenta">
                </div>
            </div>
        </div>
    </div>
</div>
@include('web.layout.footer')