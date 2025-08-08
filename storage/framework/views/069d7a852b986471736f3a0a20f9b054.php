<?php $__env->startSection('title', __('Reservation Report')); ?>
<?php $__env->startSection('content'); ?>
    <div>
        
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        
                        <h2 class="page-title">
                            <?php echo e(__('Reservation Report')); ?>

                        </h2>
                        <p class="text-muted small">
                            <?php echo e(__('See the reservation report on :1.', ['1' => config('app.name')])); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-lg-3">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('backend.report.reservation.filter', []);

$__html = app('livewire')->mount($__name, $__params, 'lkNVrrW', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    </div>
                    <div class="col-lg-9">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('backend.report.reservation.preview', []);

$__html = app('livewire')->mount($__name, $__params, 'iWa07sr', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', ['layout' => 'fluid'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/backend/pages/report/reservation.blade.php ENDPATH**/ ?>