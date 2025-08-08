<div>
    
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    
                    <h2 class="page-title">
                        <?php echo e(__('Payment Vendor')); ?>

                    </h2>
                </div>
                
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            wire:click="$dispatch('refresh_create_form')" data-bs-target="#create-payment-vendor-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            <?php echo e(__('Create :create', ['create' => __('Payment Vendor')])); ?>

                        </a>
                        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                            data-bs-target="#create-payment-vendor-modal" wire:click="$dispatch('refresh_create_form')"
                            aria-label="<?php echo e(__('Create :create', ['create' => __('Payment Vendor')])); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </a>
                    </div>
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
                            <h3 class="card-title"><?php echo e(__(':data Data', ['data' => __('Payment Vendor')])); ?></h3>
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
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th class="w-1">No.</th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Account Number')); ?></th>
                                        <th><?php echo e(__('Description')); ?></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $payment_vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment_vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td>
                                                <?php echo e($payment_vendors->perPage() * ($payment_vendors->currentPage() - 1) + $loop->iteration); ?>

                                            </td>
                                            <td>
                                                <div class="d-flex py-1 align-items-center">
                                                    <span class="avatar me-2"
                                                        style="background-image: url(<?php echo e($payment_vendor->image_path); ?>); --tblr-avatar-size:6rem"></span>
                                                    <div class="flex-fill">
                                                        <div class="font-weight-medium"> <?php echo e($payment_vendor->name); ?>

                                                        </div>
                                                        <div class="text-muted">
                                                            <span class="text-reset fst-italic">
                                                                <?php echo e(__('Number used: :number', ['number' => $payment_vendor->payments->count()])); ?>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <?php echo e($payment_vendor->account_number); ?>

                                            </td>
                                            <td>
                                                <?php echo e($payment_vendor->description ?? '-'); ?>

                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit-payment-vendor-modal"
                                                    wire:click="$dispatch('refresh_edit_form',{id:<?php echo e($payment_vendor->id); ?>})"
                                                    aria-label="<?php echo e(__('Edit :edit', ['edit' => __('Payment Vendor')])); ?>">
                                                    <?php echo e(__('Edit')); ?>

                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger"
                                                    wire:click="delete_item(<?php echo e($payment_vendor->id); ?>)">
                                                    <?php echo e(__('Delete')); ?>

                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td class="text-center" colspan=5>
                                                <?php echo e(__('No data found.')); ?>

                                            </td>
                                        </tr>
                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center">
                            <?php echo e($payment_vendors->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/livewire/backend/payment-vendor/index.blade.php ENDPATH**/ ?>