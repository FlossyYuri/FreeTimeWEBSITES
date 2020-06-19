<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<main>
    <!-- Slider Area Start-->
    <div>
        <div style="height: 100px;"></div>
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mt-3 mb-80">
                        <h2 style="color: #f64c71;">Contacte-nos​</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Envie nos uma mensagem</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escreva a mensagem...'" placeholder=" Escreva a mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" placeholder="Nome" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tema'" placeholder="Tema" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-map-marker-alt"></i></span>
                        <div class="media-body">
                            <h3>Malhazine - Maputo</h3>
                            <p>Av. Lurdes Mutola no 1369 R/C</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-phone"></i></span>
                        <div class="media-body">
                            <h3>+258 84 052 1586</h3>
                            <p>+258 87 052 1586</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-envelope"></i></span>
                        <div class="media-body">
                            <h3>contacto@flossyyuri.com</h3>
                            <p>emerson.yur@gmail.com</p>
                        </div>
                    </div>
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fab fa-facebook-f"></i></span>
                            <div class="media-body">
                                <h3>@chillstudioo</h3>
                                <p>Facebook</p>
                            </div>
                        </div>
                    </a>
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fab fa-instagram"></i></span>
                            <div class="media-body">
                                <h3>@chillstudio_</h3>
                                <p>Instagram</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
</main>