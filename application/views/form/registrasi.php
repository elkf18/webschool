<body class="bg-gradient-primary">
    <div class="container"><br><br><br><br><br>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form method="POST" action="<?= base_url('registrasi/index') ?>" class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email">
                                            <?= form_error('email', '<div class="text-danger small">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                                            <?= form_error('username', '<div class="text-danger small">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password_1" placeholder="Password">
                                            <?= form_error('password_1', '<div class="text-danger small">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password_2" placeholder="Ulangi Password">
                                            <?= form_error('password_2', '<div class="text-danger small">', '</div>') ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary form-control">Register</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/login') ?>">Sudah Punya Akun? <strong>Login</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>