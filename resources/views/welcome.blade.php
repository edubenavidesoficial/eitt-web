
@include('web.layout.header')
    <!-- ========================= Banner Section Start =============================== -->
<section class="banner py-80 position-relative overflow-hidden">

    <img src="assets/images/shapes/shape1.png" alt="" class="shape one animation-rotation">
    <img src="assets/images/shapes/shape2.png" alt="" class="shape two animation-scalation">
    <img src="assets/images/shapes/shape3.png" alt="" class="shape three animation-walking">
    <img src="assets/images/shapes/shape4.png" alt="" class="shape four animation-scalation">
    <img src="assets/images/shapes/shape5.png" alt="" class="shape five animation-walking">
    
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-xl-6">
                <div class="banner-content pe-md-4">
                    <div class="flex-align gap-8 mb-16">
                        <span class="w-8 h-8 bg-main-600 rounded-circle"></span>
                        <h5 class="text-main-600 mb-0"> Tu futuro, alcanza el éxito</h5>
                    </div>
                    <h1 class="display2 mb-24">Encuentra tu <span class="text-main-two-600">Curso Ideal</span> y Mejora tus <span class="text-main-600">Habilidades</span></h1>

                    <p class="text-neutral-500 text-line-2">Bienvenido a Eitt, donde el aprendizaje no tiene límites. Ya seas estudiante, profesional.</p>
                    <div class="buttons-wrapper flex-align flex-wrap gap-24 mt-40">
                        <a href="cursos" class="btn btn-main rounded-pill flex-align gap-8">
                            Explorar Cursos
                            <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                        </a>
                        <a href="nosotros" class="btn btn-outline-main rounded-pill flex-align gap-8">
                            Sobre Nosotros
                            <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="banner-thumb position-relative">
                    <img src="assets/images/thumbs/banner-img.png" alt="" class="banner-thumb__img rounded-12">

                    <img src="assets/images/shapes/curve-arrow.png" alt="" class="curve-arrow position-absolute">
                    <div class="banner-box one px-24 py-12 rounded-12 bg-white fw-medium box-shadow-lg d-inline-block">
                        <span class="text-main-600">+</span>Estudiantes matriculados
                        <div class="enrolled-students mt-12">
                            <img src="assets/images/thumbs/enroll-student-img1.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            <img src="assets/images/thumbs/enroll-student-img2.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            <img src="assets/images/thumbs/enroll-student-img3.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            <img src="assets/images/thumbs/enroll-student-img4.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            <img src="assets/images/thumbs/enroll-student-img5.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            <img src="assets/images/thumbs/enroll-student-img6.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                        </div>
                    </div>
                    <div class="banner-box two px-24 py-12 rounded-12 bg-white fw-medium box-shadow-lg flex-align d-inline-flex gap-16">
                        <span class="banner-box__icon flex-shrink-0 w-48 h-48 bg-purple-400 text-white text-2xl flex-center rounded-circle"><i class="ph ph-watch"></i></span>
                        <div>
                            <h6 class="mb-4">20% de descuento</h6>
                            <span class=""> Para todos los cursos</span>
                        </div>
                    </div>
                    <div class="banner-box three px-24 py-12 rounded-12 bg-white fw-medium box-shadow-lg flex-align d-inline-flex gap-16">
                        <span class="banner-box__icon flex-shrink-0 w-48 h-48 bg-main-50 text-main-600 text-2xl flex-center rounded-circle"><i class="ph ph-phone-call"></i></span>
                        <div>
                            <span class="">Soportes en línea20% OFF</span>
                            <a href="tel:593978719184" class="mt-8 fw-medium text-xl d-block text-main-600 hover-text-main-500">(704) 555-0127</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= Banner SEction End =============================== -->

     <!-- ========================== Info Section Start =================================== -->
<section class="info py-40 bg-main-600">
    <div class="container">
        <div class="row gy-4">
            <div class="col-xl-3 col-sm-6">
                <div class="info-item animation-item flex-align gap-20">
                    <span class="w-60 h-60 flex-center bg-white text-main-600 text-28 rounded-circle flex-shrink-0">
                        <i class="animate__heartBeat ph-bold ph-video-camera"></i>
                    </span>
                    <div class="flex-grow-1">
                        <h5 class="mb-8 text-white fw-medium">Cursos en línea</h5>
                        <span class="text-sm text-white">Disfrute de una variedad de temas nuevos.</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="info-item animation-item flex-align gap-20">
                    <span class="w-60 h-60 flex-center bg-white text-main-600 text-28 rounded-circle flex-shrink-0">
                         <i class="animate__heartBeat ph-bold ph-users"></i>
                        </span>
                    <div class="flex-grow-1">
                        <h5 class="mb-8 text-white fw-medium">Instrucción experta</h5>
                        <span class="text-sm text-white">Encuentra el instructor adecuado para ti</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="info-item animation-item flex-align gap-20">
                    <span class="w-60 h-60 flex-center bg-white text-main-600 text-28 rounded-circle flex-shrink-0">
                         <i class="animate__heartBeat ph-bold ph-clock"></i>
                        </span>
                    <div class="flex-grow-1">
                        <h5 class="mb-8 text-white fw-medium"> Acceso Virtual</h5>
                        <span class="text-sm text-white">Aprende según tu horario</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="info-item animation-item flex-align gap-20">
                    <span class="w-60 h-60 flex-center bg-white text-main-600 text-28 rounded-circle flex-shrink-0">
                         <i class="animate__heartBeat ph-bold ph-certificate"></i>
                        </span>
                    <div class="flex-grow-1">
                        <h5 class="mb-8 text-white fw-medium">Obtener certificado</h5>
                        <span class="text-sm text-white">Cuando finalizan los cursos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================== Info Section End =================================== -->

    <!-- ============================= Features Section Start ============================== -->
 <section class="features py-120 position-relative overflow-hidden">
    <img src="assets/images/shapes/shape2.png" alt="" class="shape two animation-scalation">
    <img src="assets/images/shapes/shape4.png" alt="" class="shape six animation-walking">

    <div class="container">
    <div class="section-heading text-center">
    <h2 class="mb-24">Nuestros Aportes</h2>
    <p class="">Conoce nuestros aportes a la comunidad educativa</p>
</div>
        <div class="features-slider">
            <div class="px-8">
                <div class="features-item item-hover animation-item bg-main-25 border border-neutral-30 rounded-16 transition-1 hover-bg-main-600 hover-border-main-600">
                    <span class="mb-32 w-110 h-110 flex-center bg-white rounded-circle">
                        <img src="assets/images/icons/feature-icon1.png" class="animate__bounce" alt="">
                    </span>
                    <h4 class="mb-16 transition-1 item-hover__text">Cursos para Docentes y Estudiantes</h4>
<p class="transition-1 item-hover__text text-line-2">Explora cursos diseñados para docentes y estudiantes que se preparan para ingresar a la universidad</p>
<a href="cursos" class="item-hover__text flex-align gap-8 text-main-600 mt-24 hover-text-decoration-underline transition-1">
    Ver Categoría
    <i class="ph ph-arrow-right"></i>
</a>
                </div>
            </div>
            <div class="px-8">
    <div class="features-item item-hover animation-item bg-main-25 border border-neutral-30 rounded-16 transition-1 hover-bg-main-600 hover-border-main-600">
        <span class="mb-32 w-110 h-110 flex-center bg-white rounded-circle">
            <img src="assets/images/icons/feature-icon2.png" class="animate__bounce" alt="">
        </span>
        <h4 class="mb-16 transition-1 item-hover__text">Cursos para Docentes</h4>
        <p class="transition-1 item-hover__text text-line-2">Cursos de formación continua para docentes: pedagogía, innovación educativa, tecnología en el aula</p>
        <a href="cursos" class="item-hover__text flex-align gap-8 text-main-600 mt-24 hover-text-decoration-underline transition-1">
            Ver Categoría
            <i class="ph ph-arrow-right"></i>
        </a>
    </div>
</div>
<div class="px-8">
    <div class="features-item item-hover animation-item bg-main-25 border border-neutral-30 rounded-16 transition-1 hover-bg-main-600 hover-border-main-600">
        <span class="mb-32 w-110 h-110 flex-center bg-white rounded-circle">
            <img src="assets/images/icons/feature-icon3.png" class="animate__bounce" alt="">
        </span>
        <h4 class="mb-16 transition-1 item-hover__text">Preparación para Universidad</h4>
        <p class="transition-1 item-hover__text text-line-2">Cursos para estudiantes que se preparan para el ingreso a la universidad: matemáticas, ciencias, lógica y más</p>
        <a href="cursos" class="item-hover__text flex-align gap-8 text-main-600 mt-24 hover-text-decoration-underline transition-1">
            Ver Categoría
            <i class="ph ph-arrow-right"></i>
        </a>
    </div>
</div>
<div class="px-8">
    <div class="features-item item-hover animation-item bg-main-25 border border-neutral-30 rounded-16 transition-1 hover-bg-main-600 hover-border-main-600">
        <span class="mb-32 w-110 h-110 flex-center bg-white rounded-circle">
            <img src="assets/images/icons/feature-icon2.png" class="animate__bounce" alt="">
        </span>
        <h4 class="mb-16 transition-1 item-hover__text">Tecnología Educativa</h4>
        <p class="transition-1 item-hover__text text-line-2">Cursos sobre herramientas tecnológicas para mejorar la enseñanza: apps, plataformas y software educativo</p>
        <a href="cursos" class="item-hover__text flex-align gap-8 text-main-600 mt-24 hover-text-decoration-underline transition-1">
            Ver Categoría
            <i class="ph ph-arrow-right"></i>
        </a>
    </div>
</div>

        </div>
        <div class="flex-align gap-16 mt-40 justify-content-center">
            <button type="button" id="features-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                <i class="ph ph-caret-left"></i>
            </button>
            <button type="button" id="features-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                <i class="ph ph-caret-right"></i>
            </button>
        </div>
    </div>
 </section>
<!-- ============================= Features Section End ============================== -->

    <!-- ================================== Explore Course Section Start =========================== -->
 <section class="explore-course py-120 bg-main-25 position-relative z-1">
    <img src="assets/images/shapes/shape2.png" alt="" class="shape six animation-scalation">

    <div class="container">
    <div class="section-heading text-center style-flex gap-24">
    <div class="section-heading__inner text-start">
        <h2 class="mb-0">Cursos para Estudiantes y Docentes</h2>
    </div>
    <div class="section-heading__content">
        <p class="section-heading__desc text-start mt-0 text-line-2">Bienvenido a nuestro diverso y dinámico catálogo de cursos. Estamos comprometidos a brindarte lo mejor en educación...</p>
        <a href="cursos" class="item-hover__text flex-align gap-8 text-main-600 mt-24 hover-text-decoration-underline transition-1" tabindex="0">
            Ver Todo
            <i class="ph ph-arrow-right"></i>
        </a>
    </div>
</div>

<div class="nav-tab-wrapper bg-white p-16 mb-40">
    <ul class="nav nav-pills common-tab gap-16" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8 active" id="pills-categories-tab" data-bs-toggle="pill" data-bs-target="#pills-categories" type="button" role="tab" aria-controls="pills-categories" aria-selected="true">
                <i class="text-xl d-flex ph-bold ph-squares-four"></i>
                Todas las Categorías
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8" id="pills-diseño-tab" data-bs-toggle="pill" data-bs-target="#pills-diseño" type="button" role="tab" aria-controls="pills-diseño" aria-selected="false">
                <i class="text-xl d-flex ph-bold ph-code"></i>
                Tecnología Educativa
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8" id="pills-docentes-tab" data-bs-toggle="pill" data-bs-target="#pills-docentes" type="button" role="tab" aria-controls="pills-docentes" aria-selected="false">
                <i class="text-xl d-flex ph-bold ph-chalkboard-teacher"></i>
                Cursos para Docentes
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8" id="pills-universitarios-tab" data-bs-toggle="pill" data-bs-target="#pills-universitarios" type="button" role="tab" aria-controls="pills-universitarios" aria-selected="false">
                <i class="text-xl d-flex ph-bold ph-book"></i>
                Ingreso Universitario
            </button>
        </li>
       
    </ul>
</div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-categories" role="tabpanel" aria-labelledby="pills-categories-tab" tabindex="0">
                <div class="row gy-4">
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img1.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="https://docensuit.e-itt.com/" class="link text-line-2">DocentSuit</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-book"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Sistema de Reportes</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-code"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Software</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                8.7
                                <span class="text-neutral-100">(0.32k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                           
                            <span class="text-neutral-700 text-lg fw-medium">EITT</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$10</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Comprar
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
    <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
        <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
            <a href="course-details.html" class="w-100 h-100">
                <img src="assets/images/thumbs/course-img-teacher.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
            </a>
            <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                <span class="text-lg fw-medium">30h 15m</span>
            </div>
            <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                <i class="ph ph-heart"></i>
            </button>
        </div>
        <div class="course-item__content">
            <div class="">
                <h4 class="mb-28">
                    <a href="course-details.html" class="link text-line-2">Métodos de Enseñanza Efectivos</a>
                </h4>
                <div class="flex-between gap-8 flex-wrap mb-16">
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                        <span class="text-neutral-700 text-lg fw-medium">15 Lecciones</span>
                    </div>
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                        <span class="text-neutral-700 text-lg fw-medium">Intermedio</span>
                    </div>
                </div>
                <div class="flex-between gap-8 flex-wrap">
                    <div class="flex-align gap-4">
                        <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-lg text-neutral-700">
                            4.9
                            <span class="text-neutral-100">(1.2k)</span>
                        </span>
                    </div>
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-2xl d-flex">
                            <img src="assets/images/thumbs/user-img-teacher.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                        </span>
                        <span class="text-neutral-700 text-lg fw-medium">Ana</span>
                    </div>
                </div>
            </div>
            <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                <h4 class="mb-0 text-main-two-600">$399</h4>
                <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                    Inscríbete Ahora
                    <i class="ph ph-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-sm-6">
    <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
        <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
            <a href="course-details.html" class="w-100 h-100">
                <img src="assets/images/thumbs/course-img-university.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
            </a>
            <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                <span class="text-lg fw-medium">12h 45m</span>
            </div>
            <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                <i class="ph ph-heart"></i>
            </button>
        </div>
        <div class="course-item__content">
            <div class="">
                <h4 class="mb-28">
                    <a href="course-details.html" class="link text-line-2">Preparación para el Ingreso Universitario</a>
                </h4>
                <div class="flex-between gap-8 flex-wrap mb-16">
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                        <span class="text-neutral-700 text-lg fw-medium">25 Lecciones</span>
                    </div>
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                        <span class="text-neutral-700 text-lg fw-medium">Intermedio</span>
                    </div>
                </div>
                <div class="flex-between gap-8 flex-wrap">
                    <div class="flex-align gap-4">
                        <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-lg text-neutral-700">
                            4.8
                            <span class="text-neutral-100">(3.2k)</span>
                        </span>
                    </div>
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-2xl d-flex">
                            <img src="assets/images/thumbs/user-img-university.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                        </span>
                        <span class="text-neutral-700 text-lg fw-medium">Laura</span>
                    </div>
                </div>
            </div>
            <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                <h4 class="mb-0 text-main-two-600">$59</h4>
                <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                    Inscríbete Ahora
                    <i class="ph ph-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

   
   
</div>
            </div>
            <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab" tabindex="0">
                <div class="row gy-4">
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img1.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Digital Marketing</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img1.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$148</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img2.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">25h 06m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Python Programming</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img2.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$499</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img3.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Photography Masterclass</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img3.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$457</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img4.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Spanish Language Mastery: Beginner to Fluent</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img4.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$148</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img5.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Financial Planning for Millennials</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img5.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$546</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img6.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Nutrition Essentials for Healthy Living</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img6.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$345</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-programming" role="tabpanel" aria-labelledby="pills-programming-tab" tabindex="0">
                <div class="row gy-4">
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img1.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Digital Marketing</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img1.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$148</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img2.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">25h 06m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Python Programming</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img2.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$499</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img3.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Photography Masterclass</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img3.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$457</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img4.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Spanish Language Mastery: Beginner to Fluent</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img4.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$148</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img5.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Financial Planning for Millennials</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img5.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$546</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img6.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Nutrition Essentials for Healthy Living</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img6.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$345</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-webDesign" role="tabpanel" aria-labelledby="pills-webDesign-tab" tabindex="0">
                <div class="row gy-4">
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img1.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Digital Marketing</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img1.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$148</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img2.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">25h 06m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Python Programming</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img2.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$499</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img3.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Photography Masterclass</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img3.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$457</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img4.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Spanish Language Mastery: Beginner to Fluent</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img4.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$148</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img5.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Financial Planning for Millennials</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img5.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$546</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img6.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Nutrition Essentials for Healthy Living</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img6.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$345</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-Academic" role="tabpanel" aria-labelledby="pills-Academic-tab" tabindex="0">
                <div class="row gy-4">
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img1.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Digital Marketing</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img1.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$148</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img2.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">25h 06m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Python Programming</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img2.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$499</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img3.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Photography Masterclass</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img3.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$457</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img4.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Spanish Language Mastery: Beginner to Fluent</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img4.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$148</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img5.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Financial Planning for Millennials</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img5.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$546</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img6.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Nutrition Essentials for Healthy Living</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img6.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$345</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab" tabindex="0">
                <div class="row gy-4">
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img1.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Digital Marketing</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img1.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$148</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img2.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">25h 06m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Python Programming</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img2.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$499</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img3.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Introduction to Photography Masterclass</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img3.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$457</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img4.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Spanish Language Mastery: Beginner to Fluent</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img4.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$148</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img5.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Financial Planning for Millennials</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img5.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$546</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                <a href="course-details.html" class="w-100 h-100">
                    <img src="assets/images/thumbs/course-img6.png" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                </a>
                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                    <span class="text-lg fw-medium">9h 36m</span>
                </div>
                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                    <i class="ph ph-heart"></i>
                </button>
            </div>
            <div class="course-item__content">
                <div class="">
                    <h4 class="mb-28">
                        <a href="course-details.html" class="link text-line-2">Nutrition Essentials for Healthy Living</a>
                    </h4>
                    <div class="flex-between gap-8 flex-wrap mb-16">
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                            <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                        </div>
                    </div>
                    <div class="flex-between gap-8 flex-wrap">
                        <div class="flex-align gap-4">
                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-lg text-neutral-700">
                                4.7
                                <span class="text-neutral-100">(6.4k)</span>
                            </span>
                        </div>
                        <div class="flex-align gap-8">
                            <span class="text-neutral-700 text-2xl d-flex">
                                <img src="assets/images/thumbs/user-img6.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                            </span>
                            <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                        </div>
                    </div>
                </div>
                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                    <h4 class="mb-0 text-main-two-600">$345</h4>
                    <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                        Enroll Now
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
 </section>
<!-- ================================== Explore Course Section End =========================== -->
    
    
    <!-- ================================ Instructor Section Start ==================================== -->
 <section class="instructor py-120 bg-main-25 position-relative z-1">
    <img src="assets/images/shapes/shape2.png" alt="" class="shape one animation-scalation">
    <img src="assets/images/shapes/shape6.png" alt="" class="shape six animation-scalation">
    
    <div class="container">
        <div class="section-heading text-center">
        <h2 class="mb-24">Aliados Estratégicos</h2>
        <p class="mb-8">Colaboramos con empresas aliadas que comparten nuestra visión y compromiso hacia la innovación y la excelencia.</p>
        </div>
        <div class="instructor-slider">
            <div class="">
                <div class="instructor-item scale-hover-item bg-white rounded-16 p- h-100 border border-neutral-30">
                    <div class="rounded-12 overflow-hidden position-relative bg-dark-yellow">
                        <a href="/" class="w-100 h-100 d-flex align-items-end">
                            <img src="assets/images/thumbs/instructor-img1.png" alt="Course Image" class="scale-hover-item__img rounded-12 cover-img transition-2">
                        </a>
                    </div>
                    <div class="p-24 position-relative">
                        <div class="social-infos">
                            <ul class="social-list flex-align flex-column gap-12 mb-12">
    <li class="social-list__item">
        <a href="https://www.facebook.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i class="ph-bold ph-facebook-logo"></i></a>
    </li>
    <li class="social-list__item">
        <a href="https://www.twitter.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"> <i class="ph-bold ph-twitter-logo"></i></a>
    </li>
    <li class="social-list__item">
        <a href="https://www.linkedin.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i class="ph-bold ph-instagram-logo"></i></a>
    </li>
</ul>
                            <button class="social-infos__button flex-center w-44 h-44 bg-white text-main-600 rounded-circle text-2xl transition-2">
                                <i class="ph-bold ph-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="instructor-item scale-hover-item bg-white rounded-16 p-12 h-100 border border-neutral-30">
                    <div class="rounded-12 overflow-hidden position-relative bg-dark-yellow">
                        <a href="/" class="w-100 h-100 d-flex align-items-end">
                            <img src="assets/images/thumbs/instructor-img2.png" alt="Course Image" class="scale-hover-item__img rounded-12 cover-img transition-2">
                        </a>
                    </div>
                    <div class="p-24 position-relative">
                        <div class="social-infos">
                            <ul class="social-list flex-align flex-column gap-12 mb-12">
    <li class="social-list__item">
        <a href="https://www.facebook.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i class="ph-bold ph-facebook-logo"></i></a>
    </li>
    <li class="social-list__item">
        <a href="https://www.twitter.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"> <i class="ph-bold ph-twitter-logo"></i></a>
    </li>
    <li class="social-list__item">
        <a href="https://www.linkedin.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i class="ph-bold ph-instagram-logo"></i></a>
    </li>
</ul>
                            <button class="social-infos__button flex-center w-44 h-44 bg-white text-main-600 rounded-circle text-2xl transition-2">
                                <i class="ph-bold ph-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="instructor-item scale-hover-item bg-white rounded-16 p-12 h-100 border border-neutral-30">
                    <div class="rounded-12 overflow-hidden position-relative bg-dark-yellow">
                        <a href="/" class="w-100 h-100 d-flex align-items-end">
                            <img src="assets/images/thumbs/instructor-img3.png" alt="Course Image" class="scale-hover-item__img rounded-12 cover-img transition-2">
                        </a>
                    </div>
                    <div class="p-24 position-relative">
                        <div class="social-infos">
                            <ul class="social-list flex-align flex-column gap-12 mb-12">
    <li class="social-list__item">
        <a href="https://www.facebook.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i class="ph-bold ph-facebook-logo"></i></a>
    </li>
    <li class="social-list__item">
        <a href="https://www.twitter.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"> <i class="ph-bold ph-twitter-logo"></i></a>
    </li>
    <li class="social-list__item">
        <a href="https://www.linkedin.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i class="ph-bold ph-instagram-logo"></i></a>
    </li>
</ul>
                            <button class="social-infos__button flex-center w-44 h-44 bg-white text-main-600 rounded-circle text-2xl transition-2">
                                <i class="ph-bold ph-plus"></i>
                            </button>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
            <div class="">
                <div class="instructor-item scale-hover-item bg-white rounded-16 p-12 h-100 border border-neutral-30">
                    <div class="rounded-12 overflow-hidden position-relative bg-dark-yellow">
                        <a href="/" class="w-100 h-100 d-flex align-items-end">
                            <img src="assets/images/thumbs/instructor-img2.png" alt="Course Image" class="scale-hover-item__img rounded-12 cover-img transition-2">
                        </a>
                    </div>
                    <div class="p-24 position-relative">
                        <div class="social-infos">
                            <ul class="social-list flex-align flex-column gap-12 mb-12">
    <li class="social-list__item">
        <a href="https://www.facebook.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i class="ph-bold ph-facebook-logo"></i></a>
    </li>
    <li class="social-list__item">
        <a href="https://www.twitter.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"> <i class="ph-bold ph-twitter-logo"></i></a>
    </li>
    <li class="social-list__item">
        <a href="https://www.linkedin.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i class="ph-bold ph-instagram-logo"></i></a>
    </li>
</ul>
                            <button class="social-infos__button flex-center w-44 h-44 bg-white text-main-600 rounded-circle text-2xl transition-2">
                                <i class="ph-bold ph-plus"></i>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-align gap-16 mt-40 justify-content-center">
            <button type="button" id="instructor-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                <i class="ph ph-caret-left"></i>
            </button>
            <button type="button" id="instructor-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                <i class="ph ph-caret-right"></i>
            </button>
        </div>
        
    </div>
 </section>
<!-- ================================ Instructor Section End ==================================== -->



    <!-- ================================= testimonials Section Start ========================================= -->
 <section class="testimonials py-120 position-relative z-1 bg-main-25">
    <img src="assets/images/shapes/shape2.png" alt="" class="shape six animation-scalation">
    <img src="assets/images/shapes/shape3.png" alt="" class="shape four animation-rotation">
    
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="testimonials__thumbs-slider pe-lg-5 me-xxl-5">
                    <div class="testimonials__thumbs">
                        <img src="assets/images/thumbs/testimonial-img1.png" alt="">
                    </div>
                    <div class="testimonials__thumbs">
                        <img src="assets/images/thumbs/testimonial-img2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            <div class="testimonials__content">
    <div class="section-heading style-left">
        <div class="flex-align gap-8 mb-16">
            <span class="w-8 h-8 bg-main-600 rounded-circle"></span>
            <h5 class="text-main-600 mb-0">Lo que Dicen Nuestros Estudiantes</h5>
        </div>
        <h2 class="mb-24">Testimonios de Aprendices Satisfechos en Eitt</h2>
        <p class="text-neutral-500 text-line-2">Nuestros estudiantes han encontrado un gran valor en la plataforma Eitt.</p>
    </div>

    <div class="testimonials__slider">
        <div class="testimonials-item">
            <ul class="flex-align gap-8 mb-16">
                <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star"></i></li>
                <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star"></i></li>
                <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star"></i></li>
                <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star"></i></li>
                <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star-half"></i></li>
            </ul>
            <p class="text-neutral-700">"Inscribirme en los cursos de Eitt ha sido una de las mejores decisiones para mi desarrollo profesional. La flexibilidad del aprendizaje en línea me ha permitido avanzar a mi propio ritmo mientras equilibraba mis responsabilidades laborales."</p>
            <h4 class="mt-48 mb-8">Sofía González</h4>
            <span class="text-neutral-700">Docente</span>
        </div>
        <div class="testimonials-item">
            <ul class="flex-align gap-8 mb-16">
                <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star"></i></li>
                <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star"></i></li>
                <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star"></i></li>
                <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star"></i></li>
                <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star-half"></i></li>
            </ul>
            <p class="text-neutral-700">"Matricularme en los cursos de Eitt ha sido una de las mejores elecciones que he hecho. La plataforma de aprendizaje en línea me ofreció la libertad de aprender a mi propio ritmo, lo que me permitió combinar mis estudios con mi trabajo."</p>
            <h4 class="mt-48 mb-8">Diego Martínez</h4>
            <span class="text-neutral-700">Estudiante</span>
        </div>
    </div>
    <div class="flex-align gap-16 mt-40">
        <button type="button" id="testimonials-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
            <i class="ph ph-caret-left"></i>
        </button>
        <button type="button" id="testimonials-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
            <i class="ph ph-caret-right"></i>
        </button>
    </div>
</div>

            </div>
        </div>
    </div>
 </section>
<!-- ================================= testimonials Section End ========================================= -->
    
    <!-- ===================================== Event Section Start ================================= -->
<section class="event py-120">
    <div class="container">
        <div class="row gy-4">
        <div class="col-lg-12 pe-lg-5">
    <div class="section-heading style-left">
        <div class="flex-align d-inline-flex gap-8 mb-16">
            <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book-open"></i></span>
            <h5 class="text-main-600 mb-0">Próximos Eventos</h5>
        </div>
        <h2 class="mb-24">Únete a Nuestros Próximos Eventos</h2>
        <p class="text-neutral-500 text-line-4">Únete a nosotros para una variedad de emocionantes eventos que se centran en la educación y la tecnología. Nuestros eventos están diseñados para inspirar y educar.</p>
    </div>

    <div class="event-item-wrapper overflow-x-auto scroll-sm scroll-sm-horizontal pb-4">
        <div class="event-item bg-main-25 rounded-12 p-24 d-flex align-items-center border border-neutral-20 min-width-max-content hover-bg-main-600 hover-border-main-600 hover-text-white transition-1 mb-24">
            <div class="">
                <h3 class="mb-8 text-main-600">15</h3>
                <span class="text-neutral-500">Oct, 2024</span>
            </div>
            <span class="border border-neutral-40 border-dashed h-72"></span>
            <div class="">
                <div class="flex-between gap-16 flex-wrap mb-16">
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-lg d-flex"><i class="ph-bold ph-clock"></i></span>
                        <span class="text-neutral-700 text-lg fw-normal">09:00 am a 12:00 pm</span>
                    </div>
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-lg d-flex"><i class="ph-bold ph-map-trifold"></i></span>
                        <span class="text-neutral-700 text-lg fw-normal">Quito, Ecuador</span>
                    </div>
                </div>
                <h4 class="mt-12 mb-0">Seminario sobre Innovación Educativa</h4>
            </div>
            <span class="border border-neutral-40 border-dashed h-72"></span>
            <div class="flex-shrink-0">
                <a href="#" class="btn btn-outline-main rounded-pill flex-align d-inline-flex gap-8">
                    Únete Ahora
                    <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                </a>
            </div>
        </div>
        <div class="event-item bg-main-25 rounded-12 p-24 d-flex align-items-center border border-neutral-20 min-width-max-content hover-bg-main-600 hover-border-main-600 hover-text-white transition-1 mb-24">
            <div class="">
                <h3 class="mb-8 text-main-600">20</h3>
                <span class="text-neutral-500">Nov, 2024</span>
            </div>
            <span class="border border-neutral-40 border-dashed h-72"></span>
            <div class="">
                <div class="flex-between gap-16 flex-wrap mb-16">
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-lg d-flex"><i class="ph-bold ph-clock"></i></span>
                        <span class="text-neutral-700 text-lg fw-normal">02:00 pm a 05:00 pm</span>
                    </div>
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-lg d-flex"><i class="ph-bold ph-map-trifold"></i></span>
                        <span class="text-neutral-700 text-lg fw-normal">Guayaquil, Ecuador</span>
                    </div>
                </div>
                <h4 class="mt-12 mb-0">Taller de Tecnología Educativa</h4>
            </div>
            <span class="border border-neutral-40 border-dashed h-72"></span>
            <div class="flex-shrink-0">
                <a href="#" class="btn btn-outline-main rounded-pill flex-align d-inline-flex gap-8">
                    Únete Ahora
                    <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                </a>
            </div>
        </div>
        <div class="event-item bg-main-25 rounded-12 p-24 d-flex align-items-center border border-neutral-20 min-width-max-content hover-bg-main-600 hover-border-main-600 hover-text-white transition-1 mb-0">
            <div class="">
                <h3 class="mb-8 text-main-600">05</h3>
                <span class="text-neutral-500">Dic, 2024</span>
            </div>
            <span class="border border-neutral-40 border-dashed h-72"></span>
            <div class="">
                <div class="flex-between gap-16 flex-wrap mb-16">
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-lg d-flex"><i class="ph-bold ph-clock"></i></span>
                        <span class="text-neutral-700 text-lg fw-normal">10:00 am a 01:00 pm</span>
                    </div>
                    <div class="flex-align gap-8">
                        <span class="text-neutral-700 text-lg d-flex"><i class="ph-bold ph-map-trifold"></i></span>
                        <span class="text-neutral-700 text-lg fw-normal">Quito, Ecuador</span>
                    </div>
                </div>
                <h4 class="mt-12 mb-0">Congreso de Educación y Tecnología</h4>
            </div>
            <span class="border border-neutral-40 border-dashed h-72"></span>
            <div class="flex-shrink-0">
                <a href="#" class="btn btn-outline-main rounded-pill flex-align d-inline-flex gap-8">
                    Únete Ahora
                    <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                </a>
            </div>
        </div>
    </div>

    <a href="cursos" class="btn btn-outline-main rounded-pill flex-align d-inline-flex gap-8 mt-40">
        Ver Todos los Eventos
        <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
    </a>
</div>

           
        </div>
    </div>
</section>
<!-- ===================================== Event Section End ================================= -->



    <!-- ================================= Certificate Section Start ================================= -->
<div class="certificate">
    <div class="container container--lg">
        <div class="certificate-box px-16 bg-main-600 rounded-16">
            <div class="container">
                <div class="position-relative py-80">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <div class="certificate__content">
                                <div class="flex-align gap-8 mb-16">
                                    <span class="w-8 h-8 bg-white rounded-circle"></span>
                                    <h5 class="text-white mb-0">Get Certificate</h5>
                                </div>
                                <h2 class="text-white mb-40 fw-medium">Get Quality Skills Certificate From the Eitt</h2>
                                <a href="" class="btn btn-white rounded-pill flex-align d-inline-flex gap-8 hover-bg-main-800">
                                    Get Started Now
                                    <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 d-xl-block d-none">
                            <div class="certificate__thumb">    
                                <img src="assets/images/thumbs/certificate-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
    
@include('web.layout.footer')