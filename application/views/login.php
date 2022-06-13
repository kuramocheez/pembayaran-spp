<?php $this->load->view('template-admin-logreg/header'); ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><b>Pembayaran SPP</b></h1>
                                    <?php
                                    $msg = $this->session->flashdata('errLogin');
                                    if (!empty($msg)) {
                                    ?>
                                        <div class="alert alert-danger"><?= $msg ?></div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <?= form_open('login') ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nis" placeholder="Nis" value="<?= set_value('nis') ?>">
                                    <?= form_error('nis', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                
                                <div class="form-group">

                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Cek Pembayaran
                                </button>
                                <?php form_close() ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?php $this->load->view('template-admin-logreg/footer'); ?>