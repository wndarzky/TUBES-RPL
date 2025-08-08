<?php $__env->startSection('title', __('Reservation')); ?>
<?php $__env->startSection('content'); ?>
    <div>
        
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        
                        <h2 class="page-title">
                            <?php echo e(__('Reservation')); ?>

                        </h2>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="page-body">
            <div class="container-xl">
                <a href="<?php echo e(route('dashboard.reservation')); ?>" class="btn btn-light mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back" width="24"
                        height="24" viewBox="0 0 P24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1"></path>
                    </svg>
                    <?php echo e(__('Back')); ?>

                </a>
                <div class="row row-cards">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-header row justify-content-between align-items-center">
                                <div class="col-md-6">
                                    <h3 class="mb-0">
                                        #<?php echo e($reservation->id); ?>

                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-start text-lg-end">
                                        <?php if($reservation->status == 'waiting_for_payment'): ?>
                                            <span class="status status-yellow">
                                                <?php echo e(__('Waiting for Payment')); ?>

                                            </span>
                                        <?php elseif($reservation->status == 'ready_for_action'): ?>
                                            <span class="status status-blue">
                                                <?php echo e(__('Ready for Action')); ?>

                                            </span>
                                        <?php elseif($reservation->status == 'canceled'): ?>
                                            <span class="status status-red">
                                                <?php echo e(__('Reservation Canceled')); ?>

                                            </span>
                                        <?php else: ?>
                                            <span class="status status-green">
                                                <?php echo e(__('Reservation Completed')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom py-3">
                                <?php if($reservation?->payment?->status == 'paid_off'): ?>
                                    <div class="paid_off_icon" style="bottom:0; top:3rem;"></div>
                                <?php endif; ?>
                                <p class="mb-0">
                                    <strong><?php echo e(__('Orderer Name')); ?>:</strong> <?php echo e($reservation->orderer_name); ?>

                                </p>
                                <p>
                                    <strong><?php echo e(__('Total Package')); ?>:</strong> <?php echo e($reservation->details->sum('amount')); ?>

                                </p>

                                <p class="mb-0">
                                    <strong><?php echo e(__('Reservation Date')); ?>:</strong>
                                    <?php echo e(Carbon::parse($reservation->date)->translatedFormat('d F Y')); ?>

                                </p>
                                <p>
                                    <strong><?php echo e(__('Expectation Time')); ?>:</strong>
                                    <?php echo e(Carbon::parse($reservation->time)->format('H:i')); ?> WIB
                                </p>

                                

                                <h3><?php echo e(__('Package Details')); ?></h3>
                                <table class="table">
                                    <thead>
                                        <th>#</th>
                                        <th><?php echo e(__('Package Title')); ?></th>
                                        <th><?php echo e(__('Price')); ?></th>
                                        <th><?php echo e(__('Amount')); ?></th>
                                        <th><?php echo e(__('Total')); ?></th>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $reservation->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?php echo e($loop->iteration); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($item->package->title); ?>

                                                </td>
                                                <td>
                                                    <?php echo e(PriceHelper::idr($item->price, 0, true)); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($item->amount); ?>

                                                </td>
                                                <td>
                                                    <?php echo e(PriceHelper::idr($item->total_payment, 0, true)); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <p class="mb-0 d-flex align-items-baseline justify-content-end">
                                    <strong><?php echo e(__('Total Payment')); ?>:</strong>
                                    <span class="display-6 text-danger ms-3 fw-bold">
                                        <?php echo e(PriceHelper::idr($reservation->details->sum('total_payment'), 0, true)); ?>

                                    </span>
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="datagrid">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title"><?php echo e(__('Confirm Payment')); ?></div>
                                        <div class="datagrid-content">
                                            <?php if($reservation->status == 'canceled'): ?>
                                                -
                                            <?php else: ?>
                                                <?php if($reservation?->payment?->status == 'paid_off'): ?>
                                                    <span class="status status-green">
                                                        <?php echo e(__('Done')); ?>

                                                    </span>
                                                <?php else: ?>
                                                    <form
                                                        action="<?php echo e(route('dashboard.reservation.confirm-payment', $reservation->id)); ?>"
                                                        method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('put'); ?>
                                                        <button id="confirm_payment" class="btn btn-success">
                                                            <?php echo e(__('Confirm Payment')); ?>

                                                        </button>
                                                    </form>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">
                                            <?php echo e(__('Complete Reservation')); ?>

                                        </div>
                                        <div class="datagrid-content">
                                            <?php if($reservation->status == 'completed'): ?>
                                                <span class="status status-green">
                                                    <?php echo e(__('Done')); ?>

                                                </span>
                                            <?php elseif(in_array($reservation->status, ['waiting_for_payment', 'ready_for_action'])): ?>
                                                <form class="d-inline"
                                                    action="<?php echo e(route('dashboard.reservation.confirmation', $reservation->id)); ?>"
                                                    method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('put'); ?>
                                                    <button id="confirmation" class="btn btn-success">
                                                        <?php echo e(__('Confirmation')); ?>

                                                    </button>
                                                </form>
                                                <form class="d-inline"
                                                    action="<?php echo e(route('dashboard.reservation.cancel', $reservation->id)); ?>"
                                                    method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('put'); ?>
                                                    <button id="cancel" class="btn btn-danger">
                                                        <?php echo e(__('Cancel')); ?>

                                                    </button>
                                                </form>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">
                                    <?php echo e(__('Unit Usage')); ?>

                                </h3>
                            </div>
                            <div class="card-body">
                                <?php if($reservation?->payment?->status == 'paid_off'): ?>
                                    <?php if($reservation?->unit_usages): ?>
                                        <table class="table table-sm">
                                            <thead>
                                                <th>#</th>
                                                <th><?php echo e(__('Unit Name')); ?></th>
                                            </thead>
                                            <tbody>
                                                <?php $__empty_1 = true; $__currentLoopData = $reservation->unit_usages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($unit->unit->name); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <tr>
                                                        <td class="text-center" colspan=2>
                                                            <?php echo e(__('No data found.')); ?>

                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    <?php endif; ?>
                                    <?php if($reservation->status != ReservationType::Completed): ?>
                                        <button class="btn btn-primary w-100" data-bs-toggle="modal"
                                            data-bs-target="#select-unit-modal">
                                            <?php echo e(__('Select Units')); ?>

                                        </button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php echo e(__('Please confirm payment first.')); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if($reservation->status != ReservationType::Completed): ?>
        <div class="modal modal-blur fade" id="select-unit-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-scrollbar-measure" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <?php echo e(__('Select Units')); ?>

                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo e(route('dashboard.reservation.set-unit', $reservation->id)); ?>" method='post'>
                        <div class="modal-body">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <?php $__currentLoopData = range(1, $reservation->details->sum('amount')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="mb-3">
                                    <label for="unit-<?php echo e($loop->iteration); ?>" class="form-label">
                                        <?php echo e(__('Select Unit')); ?> <?php echo e($loop->iteration); ?>

                                    </label>
                                    <select class="form-select" name="selected_units[]" id="unit-<?php echo e($loop->iteration); ?>"
                                        required>
                                        <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($unit->id); ?>"><?php echo e($unit->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['selected_units.<?php echo e($loop->iteration - 1); ?>'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="mt-1 small text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php $__errorArgs = ['selected_units'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="mt-1 small text-danger">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="modal-footer">
                            <button id="unit" type="submit" class='btn btn-primary w-100'>
                                <?php echo e(__('Save')); ?>

                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        const confirm_payment_button = document.querySelector('button#confirm_payment')
        const confirmation_button = document.querySelector('button#confirmation')
        const cancel_button = document.querySelector('button#cancel')
        const unit_button = document.querySelector('button#unit')

        if (confirm_payment_button)
            confirm_payment_button.addEventListener('click', (e) => {
                e.preventDefault()
                Swal.fire({
                    title: "<?php echo e(__('Confirmation!')); ?>",
                    text: "<?php echo e(__('Are you sure you want to confirm payment the :feature?', ['feature' => __('Reservation')])); ?>",
                    icon: 'warning',
                    timer: 0,
                    toast: false,
                    position: 'center',
                    showConfirmButton: true,
                    confirmButtonText: '<?php echo e(__('Yes, do it!')); ?>',
                    showCancelButton: true,
                    cancelButtonText: '<?php echo e(__('No, cancel!')); ?>',
                    allowOutsideClick: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                }).then((result) => {
                    if (result.isConfirmed) {
                        e.target.closest('form').submit()
                    }
                })
            })

        if (confirmation_button)
            confirmation_button.addEventListener('click', (e) => {
                e.preventDefault()
                Swal.fire({
                    title: "<?php echo e(__('Confirmation!')); ?>",
                    text: "<?php echo e(__('Are you sure you want to confirmation the :feature?', ['feature' => __('Reservation')])); ?>",
                    icon: 'warning',
                    timer: 0,
                    toast: false,
                    position: 'center',
                    showConfirmButton: true,
                    confirmButtonText: '<?php echo e(__('Yes, do it!')); ?>',
                    showCancelButton: true,
                    cancelButtonText: '<?php echo e(__('No, cancel!')); ?>',
                    allowOutsideClick: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                }).then((result) => {
                    if (result.isConfirmed) {
                        e.target.closest('form').submit()
                    }
                })
            })

        if (cancel_button)
            cancel_button.addEventListener('click', (e) => {
                e.preventDefault()
                Swal.fire({
                    title: "<?php echo e(__('Confirmation!')); ?>",
                    text: "<?php echo e(__('Are you sure you want to cancel the :feature?', ['feature' => __('Reservation')])); ?>",
                    icon: 'warning',
                    timer: 0,
                    toast: false,
                    position: 'center',
                    showConfirmButton: true,
                    confirmButtonText: '<?php echo e(__('Yes, do it!')); ?>',
                    showCancelButton: true,
                    cancelButtonText: '<?php echo e(__('No, cancel!')); ?>',
                    allowOutsideClick: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                }).then((result) => {
                    if (result.isConfirmed) {
                        e.target.closest('form').submit()
                    }
                })
            })

        if (unit_button)
            unit_button.addEventListener('click', (e) => {
                e.preventDefault()
                Swal.fire({
                    title: "<?php echo e(__('Confirmation!')); ?>",
                    text: "<?php echo e(__('Are you sure you want to update the :feature?', ['feature' => __('Select Units')])); ?>",
                    icon: 'warning',
                    timer: 0,
                    toast: false,
                    position: 'center',
                    showConfirmButton: true,
                    confirmButtonText: '<?php echo e(__('Yes, do it!')); ?>',
                    showCancelButton: true,
                    cancelButtonText: '<?php echo e(__('No, cancel!')); ?>',
                    allowOutsideClick: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                }).then((result) => {
                    if (result.isConfirmed) {
                        e.target.closest('form').submit()
                    }
                })
            })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/backend/pages/reservation/show.blade.php ENDPATH**/ ?>