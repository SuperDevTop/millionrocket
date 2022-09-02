
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <link rel="icon" href="<?php echo e(asset('front-assets/img/ico_game.png')); ?>">

        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="<?php echo e(asset('admin-assets/theme/css/dashmix.min.css')); ?>">

        <style>
            .invalid-error{
                color:red;
                display:flex;
                margin-top:5px;
            }
        </style>
    </head>
    <body>
       
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <div class="bg-image">
                    <div class="row no-gutters justify-content-center bg-primary-dark-op" style="background-color:#273038 !important;">
                        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
                            <!-- Sign In Block -->
                            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                                    <!-- Header -->
                                    <div class="mb-2 text-center">
                                        <a class="link-fx font-w700 font-size-h1" href="<?php echo e(url('/')); ?>">
                                            <span class="text-dark">Million</span><span class="text-primary">&nbsp;Rocket</span>
                                        </a>
                                        <p class="text-uppercase font-w700 font-size-sm text-muted">Esqueceu sua senha</p>
                                    </div>
                                    <!-- END Header -->

                
                                    <form action="<?php echo e(route('password.request')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="token" value="<?php echo e($token); ?>">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="E-mail">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user-circle"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <?php if($errors->any()): ?>
                                                <span class="invalid-error">
                                                    <?php echo e($errors->first('email')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-alt" name="password" placeholder="senha">
                                            <?php if($errors->any()): ?>
                                                <span class="invalid-error">
                                                    <?php echo e($errors->first('password')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-alt" name="password_confirmation" placeholder="ConfirmaÇão Da Senha">
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-hero-primary">
                                                Redefinir
                                            </button>
                                            <div class="text-center add_top_10"><strong><a href="<?php echo e(route('login')); ?>">Volte ao login</a></strong></div>
                                        </div>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                            </div>
                            <!-- END Sign In Block -->
                        </div>
                    </div>
                </div>

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        
        <script src="<?php echo e(asset('admin-assets/theme/js/dashmix.core.min.js')); ?>"></script>

        <script src="<?php echo e(asset('admin-assets/theme/js/dashmix.app.min.js')); ?>"></script>

        <!-- Page JS Plugins -->
        <script src="<?php echo e(asset('admin-assets/theme/js/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>

        <!-- Page JS Code -->
        <script src="<?php echo e(asset('admin-assets/theme/js/pages/op_auth_signup.min.js')); ?>"></script>
    </body>
</html>
