<div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-3">
            <div class="card-body">
                <div class="reservation-box">
                    <!--[if BLOCK]><![endif]--><?php if($reservation?->payment?->status == 'paid_off'): ?>
                        <div class="paid_off"></div>
                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="number">
                                #<?php echo e($reservation->id); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="status">
                                <span class="<?php echo e($reservation->status); ?>">
                                    <!--[if BLOCK]><![endif]--><?php if($reservation->status == 'waiting_for_payment'): ?>
                                        <?php echo e(__('Waiting for Payment')); ?>

                                    <?php elseif($reservation->status == 'ready_for_action'): ?>
                                        <?php echo e(__('Ready for Action')); ?>

                                    <?php elseif($reservation->status == 'canceled'): ?>
                                        <?php echo e(__('Reservation Canceled')); ?>

                                    <?php else: ?>
                                        <?php echo e(__('Reservation Completed')); ?>

                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                </span>
                            </div>
                        </div>
                    </div>

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

                    <p class="mb-0 d-flex align-items-baseline">
                        <strong><?php echo e(__('Total Payment')); ?>:</strong>
                        <span class="total_payment">
                            <?php echo e(PriceHelper::idr($reservation->details->sum('total_payment'), 0, true)); ?>

                        </span>
                    </p>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fst-italic me-3">
                        <?php echo e($reservation->created_at->translatedFormat('d F Y H:i:s')); ?>

                    </span>
                    <div class="text-end">
                        <!--[if BLOCK]><![endif]--><?php if($reservation->status == 'waiting_for_payment'): ?>
                            <button class="btn btn-sm btn-danger" wire:click='cancel_item("<?php echo e($reservation->id); ?>")'>
                                <?php echo e(__('Cancel Reservation')); ?>

                            </button>
                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                        <a href="<?php echo e(route('account.history.show', $reservation->id)); ?>"
                            class="btn btn-sm btn-primary mt-1 mt-lg-0">
                            <?php echo e(__('View Reservation')); ?>

                        </a>
                    </div>
                </div>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->

    <div class="mt-4 text-center d-flex justify-content-center">
        <?php echo e($reservations->links()); ?>

    </div>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/livewire/frontend/account/reservation/index.blade.php ENDPATH**/ ?>