<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name')); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="<?php echo e(asset('branding-assets/img/logo-min.png')); ?>" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="<?php echo e(asset('frontend-assets/lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend-assets/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend-assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend-assets/css/style.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.partials.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-xxl container-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="account-box">
                                <img src="<?php echo e(Auth::user()->image_path); ?>" alt="User Image">
                                <h5><?php echo e(Auth::user()->name); ?></h5>
                                <p class="username"><?php echo e(Auth::user()->username); ?></p>
                                <p class="email"><?php echo e(Auth::user()->email); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link  <?php if(request()->routeIs('account.history*')): ?> active <?php endif; ?>" aria-current="page"
                                href="<?php echo e(route('account.history')); ?>"><?php echo e(__('History')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(request()->routeIs('account')): ?> active <?php endif; ?>" aria-current="page"
                                href="<?php echo e(route('account')); ?>"><?php echo e(__('Account')); ?></a>
                        </li>
                    </ul>
                    <div class="py-3 px-2">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.partials.backToTop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/frontend/layouts/account.blade.php ENDPATH**/ ?>