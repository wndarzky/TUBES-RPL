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
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e(__(':data Data', ['data' => __('Reservation')])); ?></h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    <?php echo e(__('Show')); ?>

                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm"
                                            wire:model.lazy="show" size="3" wire:change='set_reset_page'>
                                    </div>
                                    <?php echo e(__('entries')); ?>

                                </div>
                                <div class="ms-auto text-muted">
                                    <?php echo e(__('Search:')); ?>

                                    <div class="ms-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" aria-label="Search"
                                            wire:model.live="search" wire:change='set_reset_page'>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="btn-group w-100" role="group">
                                    <input type="radio" class="btn-check" name="btn-radio-basic"
                                        id="btn-radio-basic-1" autocomplete="off" wire:model.live='filter'
                                        value="<?php echo e(ReservationType::WaitingForPayment); ?>">
                                    <label for="btn-radio-basic-1" type="button" class="btn">
                                        <?php echo e(__('Waiting for Payment')); ?>

                                    </label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic"
                                        id="btn-radio-basic-2" autocomplete="off" wire:model.live='filter'
                                        value="<?php echo e(ReservationType::ReadyForAction); ?>">
                                    <label for="btn-radio-basic-2" type="button" class="btn">
                                        <?php echo e(__('Ready for Action')); ?>

                                    </label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic"
                                        id="btn-radio-basic-3" autocomplete="off" wire:model.live='filter'
                                        value="<?php echo e(ReservationType::Canceled); ?>">
                                    <label for="btn-radio-basic-3" type="button" class="btn">
                                        <?php echo e(__('Canceled')); ?>

                                    </label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic"
                                        id="btn-radio-basic-4" autocomplete="off" wire:model.live='filter'
                                        value="<?php echo e(ReservationType::Completed); ?>">
                                    <label for="btn-radio-basic-4" type="button" class="btn">
                                        <?php echo e(__('Completed')); ?>

                                    </label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic"
                                        id="btn-radio-basic-5" autocomplete="off" wire:model.live='filter'
                                        value="all">
                                    <label for="btn-radio-basic-5" type="button" class="btn">
                                        <?php echo e(__('All')); ?>

                                    </label>
                                </div>
                            </div>
                            <div class="mt-4">
                                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <h3 class="card-title">#<?php echo e($reservation->id); ?></h3>
                                        </div>
                                        <div class="card-body">
                                            <!--[if BLOCK]><![endif]--><?php if($reservation?->payment?->status == 'paid_off'): ?>
                                                <div class="paid_off_icon"></div>
                                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                            <div class="datagrid">
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('Orderer Name')); ?></div>
                                                    <div class="datagrid-content"><?php echo e($reservation->orderer_name); ?>

                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('Reservation Date')); ?></div>
                                                    <div class="datagrid-content">
                                                        <?php echo e(Carbon::parse($reservation->date)->translatedFormat('l, d M Y')); ?>

                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('Expectation Time')); ?></div>
                                                    <div class="datagrid-content">
                                                        <?php echo e(Carbon::parse($reservation->time)->format('H:i')); ?> WIB
                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('Status')); ?></div>
                                                    <div class="datagrid-content">
                                                        <!--[if BLOCK]><![endif]--><?php if($reservation->status == 'waiting_for_payment'): ?>
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
                                                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('User')); ?></div>
                                                    <div class="datagrid-content">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs me-2 rounded"
                                                                style="background-image: url(<?php echo e(asset('branding-assets/img/user-default.png')); ?>)"></span>
                                                            <?php echo e($reservation->user->name); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('Order Time')); ?></div>
                                                    <div class="datagrid-content">
                                                        <?php echo e($reservation->created_at->translatedFormat('d F Y H:i')); ?>

                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('Total Package')); ?></div>
                                                    <div class="datagrid-content">
                                                        <?php echo e(PriceHelper::idr($reservation->details->sum('amount'))); ?>

                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('Total Payment')); ?></div>
                                                    <div class="datagrid-content">
                                                        <?php echo e(PriceHelper::idr($reservation->details->sum('total_payment'), 0, true)); ?>

                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('Payment Vendor')); ?></div>
                                                    <div class="datagrid-content">
                                                        <?php echo e($reservation?->payment?->payment_vendor?->name ?? '-'); ?>

                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('Proof of Payment')); ?></div>
                                                    <div class="datagrid-content">
                                                        <!--[if BLOCK]><![endif]--><?php if($reservation?->payment?->proof_of_payment): ?>
                                                            <a class="glightbox"
                                                                data-gallery="gallery-<?php echo e($reservation->id); ?>"
                                                                href="<?php echo e($reservation->payment->proof_path); ?>">
                                                                <?php echo e(__('Click Here')); ?>

                                                            </a>
                                                        <?php else: ?>
                                                            -
                                                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-title"><?php echo e(__('Confirm Payment')); ?></div>
                                                    <div class="datagrid-content">
                                                        <!--[if BLOCK]><![endif]--><?php if($reservation->status == 'canceled'): ?>
                                                            -
                                                        <?php else: ?>
                                                            <!--[if BLOCK]><![endif]--><?php if($reservation?->payment?->status == 'paid_off'): ?>
                                                                <span class="status status-green">
                                                                    <?php echo e(__('Done')); ?>

                                                                </span>
                                                            <?php else: ?>
                                                                <button class="btn btn-sm btn-success"
                                                                    wire:click="payment_item('<?php echo e($reservation->id); ?>')">
                                                                    <?php echo e(__('Click Here')); ?>

                                                                </button>
                                                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </div>
                                                <div class="datagrid-item">
                                                    <div class="datagrid-content">
                                                        <a href="<?php echo e(route('dashboard.reservation.show', $reservation->id)); ?>"
                                                            class="btn btn-primary">
                                                            <?php echo e(__('View Reservation')); ?>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="text-center">
                                        <?php echo e(__('No data found.')); ?>

                                    </div>
                                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </div>
                        <div class="mt-4 d-flex justify-content-center align-items-center">
                            <?php echo e($reservations->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/livewire/backend/reservation/index.blade.php ENDPATH**/ ?>