<div class="table-responsive">
    <table class="table">
        <thead class="text-center">
            <tr>
                <th width=30px rowspan=2>#</th>
                <th width=150px rowspan=2><?php echo e(__('Unit Name')); ?></th>
                <th colspan="<?php echo e(count($period)); ?>">
                    <?php echo e(Carbon::createFromFormat('m', $month)->translatedFormat('F')); ?>

                </th>
                <th rowspan=2>
                    <?php echo e(__('Total')); ?>

                </th>
            </tr>
            <tr>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $period; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th>
                        <?php echo e(Carbon::parse($item)->format('d')); ?>

                    </th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
            </tr>
        </thead>
        <tbody>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item['unit_name']); ?></td>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $item['unit_usage']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="text-center"><?php echo e($usage['count']); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                    <td class="text-center">
                        <?php echo e(collect($item['unit_usage'])->sum('count')); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
            <tr class="fw-bold">
                <td class="text-end" colspan="<?php echo e(count($period) + 2); ?>">
                    <?php echo e(__('Total Unit Usage')); ?>

                </td>
                <td class="text-center">
                    <?php echo e(collect($data)->sum(fn($q) => collect($q['unit_usage'])->sum('count'))); ?>

                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/printout/preview/unit_report.blade.php ENDPATH**/ ?>