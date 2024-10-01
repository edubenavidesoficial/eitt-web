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
                    <h1 class="breadcrumb__title display-4 fw-semibold text-center"> PREGUNTAS</h1>
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
                            <span class="text-main-two-600"> Preguntas </span> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcrumb End Here ==================== -->
    <!-- ======================================== Faq Section Start ========================== -->
    <section class="faq py-120 position-relative">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 d-lg-block d-none">
                <div class="faq-thumb">
                    <img src="assets/images/thumbs/faq-img.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
            <div class="faq-content">
    <div class="mb-40">
        <div class="flex-align d-inline-flex gap-8 mb-16">
            <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book"></i></span>
            <h5 class="text-main-600 mb-0">Preguntas Frecuentes (FAQs)</h5>
        </div>
        <h2 class="mb-24">Encuentra Respuestas a Tus Preguntas</h2>
        <p class="text-neutral-500 text-line-2">¡Bienvenido a nuestra sección de FAQs! Aquí hemos recopilado respuestas a algunas de las preguntas más comunes que nos hacen nuestros usuarios sobre nuestros cursos.</p>
    </div>

    <div class="accordion common-accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Cómo me inscribo en un curso?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p class="accordion-body__desc">Para inscribirte en un curso, simplemente selecciona el curso que te interesa y haz clic en el botón de inscripción. Después de la inscripción, tendrás acceso ilimitado a los materiales del curso.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Puedo acceder a mis cursos desde dispositivos móviles?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p class="accordion-body__desc">Sí, nuestros cursos son completamente accesibles desde dispositivos móviles. Puedes estudiar donde y cuando quieras, sin limitaciones.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Cuánto tiempo tendré acceso a un curso?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p class="accordion-body__desc">Tendrás acceso ilimitado a los materiales del curso mientras el curso esté disponible en nuestra plataforma, lo que significa que puedes aprender a tu propio ritmo.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    ¿Qué hago si necesito ayuda o tengo preguntas durante el curso?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p class="accordion-body__desc">Nuestro equipo de soporte está disponible para ayudarte. Puedes contactarnos a través de nuestra plataforma y estaremos encantados de responder tus preguntas.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    ¿Ofrecen reembolsos si no estoy satisfecho con un curso?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p class="accordion-body__desc">Sí, ofrecemos una política de reembolso si no estás satisfecho con el curso dentro de un período específico. Consulta nuestra política de reembolsos para más detalles.</p>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
 </section>
<!-- ======================================== Faq Section End ========================== -->
@include('web.layout.footer')