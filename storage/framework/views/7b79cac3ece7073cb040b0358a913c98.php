<div class="table-responsive">
    <table class="table">
        <thead class="text-center">
            <tr>
                <th rowspan=2>#</th>
                <th rowspan=2><?php echo e(__('Date')); ?></th>
                <th colspan="<?php echo e(count(ReservationType::getValues())); ?>"><?php echo e(__('Status')); ?></th>
                <th rowspan=2><?php echo e(__('Total')); ?></th>
            </tr>
            <tr>
                <th width=90px><?php echo e(__('Waiting for Payment')); ?></th>
                <th width=90px><?php echo e(__('Ready for Action')); ?></th>
                <th width=90px><?php echo e(__('Completed')); ?></th>
                <th width=90px><?php echo e(__('Canceled')); ?></th>
            </tr>
        </thead>

        <tbody>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e(Carbon::parse($item['date'])->translatedFormat('d F Y')); ?></td>
                    <td class="text-center">
                        <?php echo e($item['reservations'][ReservationType::WaitingForPayment]); ?>

                    </td>
                    <td class="text-center">
                        <?php echo e($item['reservations'][ReservationType::ReadyForAction]); ?>

                    </td>
                    <td class="text-center">
                        <?php echo e($item['reservations'][ReservationType::Completed]); ?>

                    </td>
                    <td class="text-center">
                        <?php echo e($item['reservations'][ReservationType::Canceled]); ?>

                    </td>
                    <td class="text-center">
                        <?php echo e(collect($item['reservations'])->sum(fn($q) => $q)); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
            <tr class="fw-bold">
                <td class="text-end" colspan="2">
                    <?php echo e(__('Total')); ?>

                </td>
                <td class="text-center">
                    <?php echo e(collect($data)->sum(fn($q) => $q['reservations'][ReservationType::WaitingForPayment])); ?>

                </td>
                <td class="text-center">
                    <?php echo e(collect($data)->sum(fn($q) => $q['reservations'][ReservationType::ReadyForAction])); ?>

                </td>
                <td class="text-center">
                    <?php echo e(collect($data)->sum(fn($q) => $q['reservations'][ReservationType::Completed])); ?>

                </td>
                <td class="text-center">
                    <?php echo e(collect($data)->sum(fn($q) => $q['reservations'][ReservationType::Canceled])); ?>

                </td>
                <td class="text-center">
                    <?php echo e(collect($data)->sum(fn($q) => collect($q['reservations'])->sum(fn($r) => $r))); ?>

                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/printout/preview/reservation_report.blade.php ENDPATH**/ ?>