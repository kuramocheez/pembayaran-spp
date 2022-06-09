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
                                    $msgRegis = $this->session->flashdata('register');
                                    if (!empty($msgRegis)) {
                                    ?>
                                        <div class="alert alert-success"><?= $msgRegis ?></div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    $msgLogin = $this->session->flashdata('errLogin');
                                    if (!empty($msgLogin)) {
                                    ?>
                                        <div class="alert alert-danger"><?= $msgLogin ?></div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <?= form_open('admin/login') ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" aria-describedby="emailHelp" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                                    <?= form_error('username', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                                    <?= form_error('password', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-group">

                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <?php form_close() ?>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('admin/register') ?>">Daftar Yuk!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?php $this->load->view('template-admin-logreg/footer'); ?>