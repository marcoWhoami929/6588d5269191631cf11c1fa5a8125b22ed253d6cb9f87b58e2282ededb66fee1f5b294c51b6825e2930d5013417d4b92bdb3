<?php
$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();
$social = ControladorPlantilla::ctrEstiloPlantilla();
?>
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 d-flex justify-content-between">
                    <!-- Logo Area -->
                    <div class="logo">

                        <a href="<?php echo $url; ?>">

                            <img src="<?php echo $servidor . $social["logo"]; ?>" class="img-responsive">

                        </a>
                    </div>

                    <!-- Top Contact Info -->
                    <div class="top-contact-info d-flex align-items-center">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Lunes – Viernes: 09:00 – 18:00 h
Sábado: 9:00 – 14:00 h"><i class="fa fa-map-marker fa-2x"></i> <span>11 sur, No. 13103, Col. San Diego Castillotla, Puebla, Pue. México.</span></a>
                        <a href="mailto:contacto@acerosamesa.com" data-toggle="tooltip" data-placement="bottom" title="contacto@acerosamesa.com"><i class="fa fa-envelope fa-2x"></i> <span>contacto@acerosamesa.com</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="credit-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="creditNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="inicio">Inicio</a></li>
                                <li><a href="nosotros">Nosotros</a></li>
                                <li><a href="servicios">Servicios</a>
                                    <ul class="dropdown">
                                        <li><a href="renta">Renta</a></li>
                                        <li><a href="fabricacion">Fabricación</a></li>
                                        <li><a href="transformacion">Transformación</a></li>
                                        <li><a href="venta">Venta</a></li>

                                    </ul>
                                </li>
                                <li><a href="productos">Productos</a>
                                    <ul class="dropdown">
                                        <li><a href="techos">Techos Con y Sin Estructura</a></li>
                                        <li><a href="polines">Polines</a></li>
                                        <li><a href="placa">Placa</a></li>
                                        <li><a href="laminas">Lámina</a></li>
                                        <li><a href="tableros">Tableros</a></li>
                                        <li><a href="perfiles">Perfiles</a></li>
                                        <li><a href="tuberias">Tuberías</a></li>
                                        <li><a href="vigas">Viga IPR</a></li>

                                    </ul>
                                </li>
                                <li><a href="blog">Blog</a></li>
                                <li><a href="contacto">Contacto</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Contact -->
                    <div class="contact">
                        <a href="tel:+522221301177"><img src="views/img/core-img/call2.png" alt=""> 22 21 30 11 77</a>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>