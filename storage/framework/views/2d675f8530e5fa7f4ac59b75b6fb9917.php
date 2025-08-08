<?php $__env->startSection('title', __('Account')); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center">
        <a href="<?php echo e(route('account.history')); ?>" class="btn btn-sm btn-light mb-3">
            <i class="bi bi-arrow-return-left"></i>
            <?php echo e(__('Back')); ?>

        </a>

        <div class="text-right">
            <?php if($previous): ?>
                <a href="<?php echo e(route('account.history.show', $previous->id)); ?>" class="btn btn-sm btn-primary mb-3">
                    <i class="bi bi-arrow-left"></i>
                    <?php echo e(__('Previous')); ?>

                </a>
            <?php endif; ?>
            <?php if($next): ?>
                <a href="<?php echo e(route('account.history.show', $next->id)); ?>" class="btn btn-sm btn-primary mb-3">
                    <?php echo e(__('Next')); ?>

                    <i class="bi bi-arrow-right"></i>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="reservation-box">
                <?php if($reservation?->payment?->status == 'paid_off'): ?>
                    <div class="paid_off"></div>
                <?php endif; ?>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="number">
                            #<?php echo e($reservation->id); ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="status">
                            <span class="<?php echo e($reservation->status); ?>">
                                <?php if($reservation->status == 'waiting_for_payment'): ?>
                                    <?php echo e(__('Waiting for Payment')); ?>

                                <?php elseif($reservation->status == 'ready_for_action'): ?>
                                    <?php echo e(__('Ready for Action')); ?>

                                <?php elseif($reservation->status == 'canceled'): ?>
                                    <?php echo e(__('Reservation Canceled')); ?>

                                <?php else: ?>
                                    <?php echo e(__('Reservation Completed')); ?>

                                <?php endif; ?>
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

                <h6><?php echo e(__('Package Details')); ?></h6>
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
                <div class="text-right">
                    <?php if($reservation->status == 'waiting_for_payment'): ?>
                        <form action="<?php echo e(route('account.history.show.cancel', $reservation->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <button id="cancel-item" type="button" class="btn btn-sm btn-danger">
                                <?php echo e(__('Cancel Reservation')); ?>

                            </button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php if($reservation->status == 'waiting_for_payment' && $reservation?->payment?->status != 'waiting_for_confirmation'): ?>
        <div class="card">
            <div class="card-body">
                <h5>
                    <?php echo e(__('Payment Information')); ?>

                </h5>
                <ol class="list-group list-group-flush my-3">
                    <li class="list-group-item">
                        1. <?php echo e(__('Customers can choose one of the available payment types.')); ?>

                    </li>
                    <li class="list-group-item">
                        2. <?php echo e(__('Make sure the payment amount matches what is stated on the form.')); ?>

                    </li>
                    <li class="list-group-item">
                        3.
                        <?php echo e(__("After making payment, Customers are required to send proof of payment via the 'Send Proof of Payment' button on this form.")); ?>

                    </li>
                </ol>
                <form class="mt-4" action="<?php echo e(route('account.history.show.payment', $reservation->id)); ?>" method="post"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="mb-3">
                        <?php $__currentLoopData = $payment_vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment_vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="payment-vendor-radio">
                                <input type="radio" value="<?php echo e($payment_vendor->id); ?>"
                                    id="payment-vendor-<?php echo e($payment_vendor->id); ?>" name='selected_payment_vendor'
                                    <?php if(old('selected_payment_vendor') == $payment_vendor->id): ?> checked <?php endif; ?> required>
                                <label for="payment-vendor-<?php echo e($payment_vendor->id); ?>">
                                    <div class="img-box">
                                        <img src="<?php echo e($payment_vendor->image_path); ?>" alt="Payment Vendor Image">
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <?php echo e($payment_vendor->name); ?>

                                        </div>
                                        <div class="account_number">
                                            <?php echo e($payment_vendor->account_number); ?>

                                        </div>
                                        <div class="description">
                                            <?php echo e($payment_vendor->description); ?>

                                        </div>
                                    </div>
                                </label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__errorArgs = ['selected_payment_vendor'];
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

                    <div class="mb-3">
                        <label class="form-label" for="proof_of_payment"><?php echo e(__('Proof of Payment')); ?> <span
                                class="text-danger">*<?php echo e(__('Optional')); ?></span></label>
                        <input type="file" class="form-control" name="proof_of_payment" id="proof_of_payment"
                            accept="image/*">
                        <?php $__errorArgs = ['proof_of_payment'];
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

                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-primary">
                            <?php echo e(__('Send Proof of Payment')); ?>

                        </button>
                    </div>
                </form>
            </div>
        </div>
    <?php elseif($reservation->status == 'waiting_for_payment' && $reservation?->payment?->status == 'waiting_for_confirmation'): ?>
        <div class="alert alert-warning d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
                aria-label="Warning:">
                <path
                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
            <div>
                <?php echo e(__('Your payment is currently being checked by the Administrator.')); ?>

            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        const cancelItem = (el) => {
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
                    el.closest('form').submit()
                }
            })
        }

        $('#cancel-item').on('click', (e) => {
            e.preventDefault()
            cancelItem($('#cancel-item'))
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/frontend/pages/account/history/show.blade.php ENDPATH**/ ?>