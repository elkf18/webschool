<body class="bg-gradient-primary">
    <div class="container"><br><br><br><br><br>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                    </div>
                                    <form method="POST" action="<?= base_url('auth/login') ?>" class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" placeholder="Email" name="email">
                                            <?= form_error('email', '<div class="text-danger small">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                            <?= form_error('password', '<div class="text-danger small">', '</div>') ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary form-control">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('registrasi/index') ?>">Belum Punya Akun ? <strong>Register</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>