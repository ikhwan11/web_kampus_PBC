<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="/assets/img/icon_pbc.png" rel="icon">

    <link rel="stylesheet" href="/assets/css/login_styles.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(/assets/img/About.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <img src="/assets/img/icon_pbc.png" class="img-fluid mb-3 mx-auto d-block" alt="" width="100">
                                </div>
                            </div>
                            <form action="/Auth/login_act" method="POST" class="signin-form">
                                <?php if (session()->getFlashdata('pesan')) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= session()->get('pesan'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <?= csrf_field(); ?>
                                <div class="form-group mt-3">
                                    <input placeholder="username.." type="text" class="form-control" name="username" id="username" autofocus>

                                </div>
                                <div class="form-group">
                                    <input placeholder="password.." id="password-field" type="password" class="form-control" name="password" id="password">

                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" name="login" class="form-control btn btn-primary rounded submit px-3" value="LOGIN">
                                            <!-- <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button> -->
                                        </div>
                                        <div class="col-md-6">
                                            <a href="/" class="text-white form-control btn btn-danger rounded submit px-3">CANCEL</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div> -->
                            </form>
                            <!-- <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/login.js"></script>

</body>

</html>