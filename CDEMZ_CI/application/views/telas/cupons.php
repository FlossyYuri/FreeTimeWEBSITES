<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<main>
    <div style="height: 100px;"></div>
    <!-- Best Pricing Start -->
    <section class="best-pricing pricing-padding" data-background="assets/img/gallery/best_pricingbg.jpg">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-tittle section-tittle2 text-center">
                        <h2>Escolha o cupom que deseja comprar.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Pricing End -->
    <!-- Pricing Card Start -->
    <div class="pricing-card-area pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span>100 CS</span>
                            <h4>100<span>MZN</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Cupom Essencial</li>
                                <li>Recarregável</li>
                                <li>Pague via M-Pesa</li>
                            </ul>
                            <a href="#" class="btn2 card-btn1" val="100">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span>200 CS</span>
                            <h4>200<span>MZN</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Cupom Standard</li>
                                <li>Recarregável</li>
                                <li>Pague via M-Pesa</li>
                            </ul>
                            <a href="#" class="btn2 card-btn1" val="200">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span>500 CS</span>
                            <h4>500<span>MZN</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Cupom Deluxe</li>
                                <li>Recarregável</li>
                                <li>Pague via M-Pesa</li>
                            </ul>
                            <a href="#" class="btn2 card-btn1" val="500">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Card End -->
    <?php $this->load->view('telas/disponibilidade') ?>
    <?php $this->load->view('telas/colaborar') ?>
</main>

<!--Modal: ModalMPESA-->
<div class="modal fade" id="modalMPESA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header red white-text text-center">
                <h4 class="text-white"><i class="far fa-credit-card"></i> Comprar cupom</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <!--Body-->
            <div class="modal-body mb-0 text-center">
                <!-- Material form grid -->
                <form>
                    <!-- Grid row -->
                    <div class="row">
                        <div class="col-12 text-justify">
                            <h3 class="text-danger pague" style="font-weight: 500">Pague via M-Pesa <span style="font-size: 14px">100 MZN</span></h3>
                            <p>Introduza o seu número abaixo, clique em pagar e confirme o pagamento no seu celular.</p>
                        </div>
                        <!-- Material input -->
                        <div class="md-form mt-0 col-4 col-md-2">
                            <img src="<?php echo base_url('assets/img/gallery/mpesa.png') ?>" alt="" style="height: 40px">
                        </div>
                        <div class="md-form mt-0 col-8 col-md-6">
                            <input type="text" class="form-control" placeholder="84XXXXXXX">
                        </div>
                        <div class="md-form mt-0 col-12 col-md-4">
                            <a id="pagar" class="btn red">Pagar</a>
                        </div>

                    </div>
                    <!-- Grid row -->
                </form>
                <!-- Material form grid -->
            </div>

        </div>
        <!--/.Content-->

    </div>
</div>
<!--Modal: modalSocial-->

<!--Modal: modalCupom-->
<div class="modal fade" id="modalCupom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Body-->
            <div class="modal-body mb-0 p-0">
                <?php $this->load->view('telas/cupom') ?>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center flex-column flex-md-row">
                <span class="mr-4">Compra Efeituada com sucesso! </span>
                <div>
                
                    <span><i class="fas fa-hashtag"></i>XXXX YYYY ZZZZ</span>
                </div>
                <button type="button" class="btn btn-outline-primary btn-rounded btn-md" data-dismiss="modal">Fechar</button>

            </div>

        </div>
        <!--/.Content-->

    </div>
</div>
<!--Modal: modalCupom-->