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
                    <h1 class="breadcrumb__title display-4 fw-semibold text-center"> NOSOTROS</h1>
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
                            <span class="text-main-two-600"> Nosotros </span> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcrumb End Here ==================== -->
  <!-- ================================ About Section Start ==================================== -->
  <section class="about py-120 position-relative z-1 mash-bg-main mash-bg-main-two">
    <img src="assets/images/shapes/shape2.png" alt="" class="shape one animation-scalation">
    <img src="assets/images/shapes/shape6.png" alt="" class="shape four animation-scalation">

    <div class="position-relative">
        <div class="container">
            <div class="row gy-xl-0 gy-5 flex-wrap-reverse align-items-center">
                <div class="col-xl-6">
                    <div class="about-thumbs position-relative pe-lg-5">
                        <img src="assets/images/shapes/shape7.png" alt="" class="shape seven animation-scalation">
    
                        <div class="offer-message px-24 py-12 rounded-12 bg-main-two-50 fw-medium flex-align d-inline-flex gap-16 border border-neutral-30">
                            <span class="flex-shrink-0 w-48 h-48 bg-main-two-600 text-white text-2xl flex-center rounded-circle"><i class="ph ph-watch"></i></span>
                            <div>
                                <h6 class="mb-4">20% OFF</h6>
                                <span class="text-neutral-500">For All Courses</span>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <img src="assets/images/thumbs/about-img1.png" alt="" class="rounded-12 w-100">
                            </div>
                            <div class="col-sm-6">
                                <div class="flex-align gap-24 mb-24">
                                    <div class="bg-main-600 rounded-12 text-center py-24 px-2 w-50-percent">    
                                        <h1 class="mb-0 text-white">16+</h1>
                                        <span class="text-white">Years of experience</span>
                                    </div>
                                    <div class="bg-neutral-700 rounded-12 text-center py-24 px-2 w-50-percent">    
                                        <h1 class="mb-0 text-white">3.2k</h1>
                                        <span class="text-white">Years of experience</span>
                                    </div>
                                </div>
                                <img src="assets/images/thumbs/about-img2.png" alt="" class="rounded-12 w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                <div class="about-content">
    <div class="mb-40">
        <div class="flex-align gap-8 mb-16">
            <span class="w-8 h-8 bg-main-600 rounded-circle"></span>
            <h5 class="text-main-600 mb-0">Acerca de Eitt</h5>
        </div>
        <h2 class="mb-24">El Lugar Donde Puedes Lograrlo</h2>
        <p class="text-neutral-500 text-line-2">Bienvenido a Eitt, donde el aprendizaje no tiene límites. Ya seas estudiante, profesional o un aprendiz constante...</p>
    </div>

    <div class="flex-align align-items-start gap-28 mb-32">
        <span class="w-80 h-80 bg-main-25 border border-neutral-30 flex-center rounded-circle flex-shrink-0">
            <img src="assets/images/icons/about-img1.png" alt="">
        </span>
        <div class="flex-grow-1">
            <h4 class="text-neutral-500 mb-12">Nuestra Misión</h4>
            <p class="text-neutral-500">Impulsados por un equipo de educadores, tecnólogos y visionarios dedicados, nos esforzamos por crear un entorno de apoyo.</p>
        </div>
    </div>
    <div class="flex-align align-items-start gap-28 mb-0">
        <span class="w-80 h-80 bg-main-25 border border-neutral-30 flex-center rounded-circle flex-shrink-0">
            <img src="assets/images/icons/about-img2.png" alt="">
        </span>
        <div class="flex-grow-1">
            <h4 class="text-neutral-500 mb-12">Nuestra Visión</h4>
            <p class="text-neutral-500">Ya seas un profesional que busca mejorar sus habilidades o un aprendiz constante explorando nuevos horizontes, estamos aquí para acompañarte en cada paso del camino.</p>
        </div>
    </div>

    <div class="flex-align flex-wrap gap-32 pt-40 border-top border-neutral-50 mt-40 border-dashed border-0">
        <a href="course.html" class="btn btn-main rounded-pill flex-align gap-8">
            Leer Más
            <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
        </a>
        <div class="flex-align gap-20">
            <img src="assets/images/thumbs/ceo-img.png" alt="" class="w-52 h-52 rounded-circle object-fit-cover flex-shrink-0">
            <div class="flex-grow-1">
                <span class="mb-4">
                    <img src="assets/images/thumbs/signature.png" alt="">
                </span>
                <span class="text-sm d-block">CEO de la Compañía</span>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ================================ About Section End ==================================== -->
@include('web.layout.footer')