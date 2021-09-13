   <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(views/img/template/conocenos2.jpg);">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-12 col-sm-10 col-lg-8">
                   <div class="nl-content text-center">
                       <h2>
                           LLEVAMOS TODOS NUESTROS PRODUCTOS A TODA LA REPUBLICA</h2>
                       <form action="#" method="post">
                           <input type="email" name="nl-email" id="nlemail" placeholder="Your e-mail">
                           <button type="submit">Subscribe</button>
                       </form>
                       <p>Suscribete para recibir mas noticias sobre nuestros productos.</p>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <a href="https://api.whatsapp.com/send?phone=522227504596&text=Buen%20dia%20me%20gustaria%20mas%20obtener%20informacion%20" class="float animated infinite shake slower" target="_blank">
       <i class="fa fa-whatsapp my-float"></i>
   </a>
   <footer class="footer-area section-padding-100-0" id="top">


       <!-- Copywrite Area -->
       <div class="copywrite-area">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="copywrite-content d-flex flex-wrap justify-content-between ">
                           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 social text-center">

                               <ul>

                                   <?php

                                    $social = ControladorPlantilla::ctrEstiloPlantilla();

                                    $jsonRedesSociales = json_decode($social["redesSociales"], true);

                                    foreach ($jsonRedesSociales as $key => $value) {
                                        if ($value["activo"] == 0) {
                                        } else {
                                            echo '<li>
                     <a href="' . $value["url"] . '" target="_blank">
                         <i class="fa ' . $value["red"] . ' redSocial ' . $value["estilo"] . '" aria-hidden="true"></i>
                     </a>
                 </li>';
                                        }
                                    }

                                    ?>

                               </ul>

                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                               <!-- Footer Logo -->
                               <a href="inicio" class="footer-logo"><img src="views/img/template/Logo-AMESA-300x63.png" alt=""></a>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                               <!-- Copywrite Text -->
                               <p class="copywrite-text"><a href="#">
                                       <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                       Copyright &copy;<script>
                                           document.write(new Date().getFullYear());
                                       </script> Todos los derechos Reservados | Aceros Amesa by <a href="#" target="_blank">NEURAL CREATIVE</a>
                           </div>



                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>