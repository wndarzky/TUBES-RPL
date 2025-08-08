<div class="table-responsive">
    <table class="table">
        <thead class="text-center">
            <th width=30px>#</th>
            <th><?php echo e(__('Month')); ?></th>
            <th width=300px>
                <?php echo e(__('Total Revenue')); ?>

            </th>
        </thead>

        <tbody>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item['month_name']); ?></td>
                    <td class="text-end"><?php echo e(PriceHelper::idr($item['revenue'], 0, true)); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
            <tr class="fw-bold">
                <td class="text-end" colspan="2">
                    <?php echo e(__('Total Revenue')); ?>

                </td>
                <td class="text-end">
                    <?php echo e(PriceHelper::idr(collect($data)->sum(fn($q) => $q['revenue']), 0, true)); ?>

                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/printout/preview/revenue.blade.php ENDPATH**/ ?>