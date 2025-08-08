<!doctype html>
<html lang="<?php echo e(config('app.locale') ?? 'en'); ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('branding-assets/img/logo-min.png')); ?>" type="image/x-icon">
    <link href="<?php echo e(asset('backend-assets/css/tabler.min.css?1684106062')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('backend-assets/css/tabler-flags.min.css?1684106062')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('backend-assets/css/tabler-payments.min.css?1684106062')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('backend-assets/css/tabler-vendors.min.css?1684106062')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('backend-assets/css/demo.min.css?1684106062')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body <?php if(!empty($layout) && $layout == 'fluid'): ?> class="layout-fluid" <?php endif; ?>>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('backend-assets/js/demo-theme.min.js?1684106062')); ?>"></script>
    <div class="page">
        <?php echo $__env->make('backend.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('backend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <?php echo $__env->make('backend.partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/backend/layouts/app.blade.php ENDPATH**/ ?>