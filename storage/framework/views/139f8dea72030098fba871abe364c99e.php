<div>
    
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    
                    <h2 class="page-title">
                        <?php echo e(__('Schedule')); ?>

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
                            <h3 class="card-title"><?php echo e(__(':data Data', ['data' => __('Schedule')])); ?></h3>
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
                                        id="btn-radio-basic-1" autocomplete="off" wire:model.live='filter' value=1>
                                    <label for="btn-radio-basic-1" type="button" class="btn">
                                        <?php echo e(__('Today')); ?>

                                    </label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic"
                                        id="btn-radio-basic-2" autocomplete="off" wire:model.live='filter' value=2>
                                    <label for="btn-radio-basic-2" type="button" class="btn">
                                        <?php echo e(__('Next 7 Days')); ?>

                                    </label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic"
                                        id="btn-radio-basic-3" autocomplete="off" wire:model.live='filter' value=3>
                                    <label for="btn-radio-basic-3" type="button" class="btn">
                                        <?php echo e(__('Next 14 Days')); ?>

                                    </label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic"
                                        id="btn-radio-basic-4" autocomplete="off" wire:model.live='filter' value=4>
                                    <label for="btn-radio-basic-4" type="button" class="btn">
                                        <?php echo e(__('This Month')); ?>

                                    </label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic"
                                        id="btn-radio-basic-5" autocomplete="off" wire:model.live='filter' value=5>
                                    <label for="btn-radio-basic-5" type="button" class="btn">
                                        <?php echo e(__('All')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th class="w-1">No.</th>
                                        <th><?php echo e(__('Date')); ?></th>
                                        <th><?php echo e(__('Expectation Time')); ?></th>
                                        <th><?php echo e(__('Orderer Name')); ?></th>
                                        <th><?php echo e(__('Total Package')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td>
                                                <?php echo e($reservations->perPage() * ($reservations->currentPage() - 1) + $loop->iteration); ?>

                                            </td>
                                            <td>
                                                <?php echo e(Carbon::parse($reservation->date)->translatedFormat('d F Y')); ?>

                                            </td>
                                            <td>
                                                <?php echo e(Carbon::parse($reservation->time)->translatedFormat('H:i')); ?> WIB
                                            </td>
                                            <td>
                                                <?php echo e($reservation->orderer_name); ?>

                                            </td>
                                            <td>
                                                <?php echo e($reservation->details->sum('amount')); ?>

                                            </td>
                                            <td>
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
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('dashboard.reservation.show', $reservation->id)); ?>">
                                                    <?php echo e(__('Show')); ?>

                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td class="text-center" colspan=7>
                                                <?php echo e(__('No data found.')); ?>

                                            </td>
                                        </tr>
                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center">
                            <?php echo e($reservations->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/livewire/backend/schedule/index.blade.php ENDPATH**/ ?>