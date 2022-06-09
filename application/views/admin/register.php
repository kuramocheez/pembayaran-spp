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
                                    <h1 class="h4 text-gray-900 mb-4"><b>Daftar Petugas Pembayaran SPP</b></h1>
                                </div>
                                <?= form_open('admin/register') ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" aria-describedby="emailHelp" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
                                    <?= form_error('nama', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" aria-describedby="emailHelp" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                                    <?= form_error('username', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" placeholder="Email@example.com" value="<?= set_value('email') ?>">
                                    <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                                    <?= form_error('password', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="rePassword" placeholder="Re-Passoword">
                                    <?= form_error('rePassword', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-group">

                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>
                                <?php form_close() ?>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('admin/login') ?>">Login</a>
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