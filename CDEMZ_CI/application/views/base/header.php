<?php
defined('BASEPATH') or exit('No direct script access allowed');


?>
<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-4 col-lg-3">
                        <div class="logo">
                            <a href="<?php echo base_url('main') ?>" class="d-flex justify-content-start align-items-center"><img style="height: 70px;" src="<?php echo base_url('assets/img/logo/logo.png') ?>" alt="" />
                                <div style="
                        color: #c33764;
                        font-weight: 600;
                        width: 140px;
                        line-height: 24px;
                        font-size: 20px;
                      ">
                                    <span>CÓDIGO DE</span>
                                    <span style="color: #1d2671;">ESTRADA MZ</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li <?php if ($titulo == 'Home') echo 'class="active"' ?>><a href="<?php echo base_url('main') ?>"> Home</a></li>
                                    <li <?php if ($titulo == 'Cupons') echo 'class="active"' ?>><a href="<?php echo base_url('main/cupons') ?>">Cupons</a></li>
                                    <li <?php if ($titulo == 'Termos e Políticas') echo 'class="active"' ?>><a href="<?php echo base_url('main/termos') ?>">Termos e Políticas</a></li>
                                    <li <?php if ($titulo == 'Contacte-nos') echo 'class="active"' ?>><a href="<?php echo base_url('main/contactos') ?>">Contacte-nos</a></li>
                                    <li>
                                        <a>Redes Sociais</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="https://www.facebook.com/chillstudioo/" target="_blank"><i class="fab fa-facebook-f mr-2"></i><span>Facebook</span></a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/chillstudio.mz/" target="_blank"><i class="fab fa-instagram mr-2"></i><span>Instagram</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>