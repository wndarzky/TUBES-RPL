<?php $__env->startSection('content'); ?>
    <div class="container container-padding">
        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>Oops!</h1>
                    <h2>404 - <?php echo e(__("The Page can't be found")); ?></h2>
                </div>
                <a href="<?php echo e(route('home')); ?>"><?php echo e(__('Go To Homepage')); ?></a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/errors/404.blade.php ENDPATH**/ ?>