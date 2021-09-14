<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Citas Medicas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Favicons -->
        <link href="assets2/img/favicon.png" rel="icon">
        <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Vendor CSS Files -->
        <link href="assets2/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <!-- Template Main2 CSS File -->
        <link href="assets2/css/style.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        
    </head>
    <body class="antialiased">
        
            
        <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Citas Medicas</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Acerca de</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav><!-- .navbar -->

      @if (Route::has('login'))
                    
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-white-700  appointment-btn scrollto">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-white-700  appointment-btn scrollto">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-white-700  appointment-btn scrollto">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
     

    </div>
  </header><!-- End Header -->
  
        <div>

            <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
            <h1>Bienvenidos a tu consultorio Familiar</h1>
            <h2>¡Tu salud y la de los tuyos es importante!</h2>
            <a href="#about" class="btn-get-started scrollto">Acerca de</a>
            </div>
        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                    <h3>¿Qué es el Consultorio Familiar?</h3>
                    <p>
                    Somos un consultorio que cuenta con excelentes profesionales estamos activos desde el 2018, 
                    tu salud es primordial para nuestros médicos, no dudes en contactarnos, cuida de los tuyos.
                    </p>
                    <div class="text-center">
                        <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                            <i class="bx bx-receipt"></i>
                            <h4>Cuida de tus hijos</h4>
                            <p>Los consentidos de la casa deben contar con excelente salud.</p>
                        </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Cuida de tu piel</h4>
                            <p>No te descuides la piel, es importante prevenir enfermedades que te pueden afectar en un futuro.</p>
                        </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                            <i class="bx bx-images"></i>
                            <h4>Cuídate mujer</h4>
                            <p>Tu  sistema reproductor femenino debe estar sano para poder procrear un nuevo ser.</p>
                        </div>
                        </div>
                    </div>
                    </div><!-- End .content-->
                </div>
                </div>

            </div>
            </section><!-- End Why Us Section -->
            </div>
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>OBJETIVO, MISIÓN Y VISIÓN</h3>
                    <p>A continuación les mostramos detalladamente nuestro objetivo fundamental y los valores principales, que son pilares para nuestra organización.</p>

                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-fingerprint"></i></div>
                    <h4 class="title"><a href="">Objetivo</a></h4>
                    <p class="description">Contar con una estructura organizativa eficiente que se base en valores de servicio a la población, de correcto trato humano, de respeto, de seguridad y confort, teniendo al paciente, sus necesidades y expectativas, como eje de la actividad y de las decisiones que se toman.</p>
                    </div>

                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-gift"></i></div>
                    <h4 class="title"><a href="">Misión</a></h4>
                    <p class="description">Somos una institución dedicada al cuidado integral del paciente, asumiendo el compromiso de brindar atención médica de calidad, excelencia y responsabilidad.</p>
                    </div>

                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-atom"></i></div>
                    <h4 class="title"><a href="">Visión</a></h4>
                    <p class="description">Ser un centro de excelencia, que brinde con efectividad los conocimientos de las ciencias de la salud para beneficio de la comunidad</p>
                    </div>

                </div>
                </div>

            </div>
            </section><!-- End About Section -->
            <!-- ======= Departments Section ======= -->
            <section id="departments" class="departments">
            <div class="container">

                <div class="section-title">
                <h2>Especialidades</h2>
                <p>Otras especialidades con las que contamos en este centro médico se detallan a continuación y las principales se observaron al principio  de la página.</p>
                </div>

                <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiología</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurología</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Urología</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nutricion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-5"> Oftalmología </a>
                    </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>Cardiología</h3>
                            <p class="fst-italic">Es la rama de la medicina que se encarga del estudio, diagnóstico y tratamiento de las enfermedades del corazón y del aparato circulatorio. 
                                Es una especialidad médica, no quirúrgica. Los especialistas en el abordaje quirúrgico del corazón son el cirujano cardíaco o el cirujano cardiovascular.
                            </p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{ asset('/assets2/img/departments-1.jpg') }}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>Neurología</h3>
                            <p class="fst-italic">Es la especialidad médica que tiene competencia en el estudio del sistema nervioso, y de las enfermedades del cerebro, la médula, los nervios periféricos y los músculos.
                                Es uno de los campos de la medicina que más se ha desarrollado en los últimos años. Es una especialidad médica muy dinámica y en continua expansión debido a los constantes avances en el campo de las neurociencias.
                            </p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{ asset('/assets2/img/departments-2.jpg') }}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>Urología</h3>
                            <p class="fst-italic">Es la especialidad médico quirúrgica que tiene como objetivo prevenir, diagnosticar y tratar enfermedades del sistema urinario en la mujer y el sistema génito-urinario en el hombre.</p>
                            <p>Es una rama de la medicina especializada cuyo objetivo es dar solución a los padecimientos relacionados al aparato urinario y retroperitoneo.</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{ asset('/assets2/img/departments-3.jpg') }}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>Nutricion</h3>
                            <p class="fst-italic">Se refiere a los nutrientes que componen los alimentos, implica los procesos que suceden en tu cuerpo después de comer, es decir la obtención, asimilación y digestión de los nutrimientos por el organismo </p>
                            <p>La alimentación saludable cumple con las necesidades nutricionales que necesita el cuerpo, para mantener una buena salud. Además, comer sano te protege de sufrir enfermedades como obesidad, azúcar en la sangre y presión alta</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{ asset('/assets2/img/departments-4.jpg') }}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-5">
                        <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>Oftalmología </h3>
                            <p class="fst-italic">Esta especialidad médico-quirúrgica faculta al oftalmólogo para realizar las diferentes pruebas diagnósticas y las intervenciones quirúrgicas.</p>
                            <p>Es la especialidad médico-quirúrgica que se encarga del estudio y tratamiento de las enfermedades de los ojos, así como de los músculos relacionados con sus movimientos, de los párpados, vías lagrimales y de la conexión de los ojos con el cerebro.</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{ asset('/assets2/img/departments-5.jpg') }}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </section><!-- End Departments Section -->
            <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
            <h2>Contactanos</h2>
            <p>Contactanos estamos ubicados en Latacunga al frente del almacén Don Pato en un edificio color Naranja.</p>
            </div>
        </div>

        

        <div class="container">
            <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Ubicación:</h4>
                    <p>Juan Abel Echeverría 7-110 Comercial La Rebaja.</p>
                </div>

                <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Correo:</h4>
                    <p>consultoriofamiliar@gmail.com</p>
                </div>

                <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Teléfono:</h4>
                    <p>032678457</p>
                </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

            <div>
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

            </div>

            </div>

        </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
  <footer id="footer">



<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Consultorio Familiar</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
      Diseñado por Jhonatan Chiluisa, Angel Echeverria & Flor Segovia</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <!-- Vendor JS Files -->
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>
  <script src="assets2/vendor/purecounter/purecounter.js"></script>
  <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    </body>
</html>
