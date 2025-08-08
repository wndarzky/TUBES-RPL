<?php $__env->startSection('content'); ?>
    <div class="container container-padding">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('frontend.reservation.book', []);

$__html = app('livewire')->mount($__name, $__params, 'SRDaVza', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/frontend/pages/reservation/index.blade.php ENDPATH**/ ?>