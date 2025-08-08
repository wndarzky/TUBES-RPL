<div class="row">
    <div class="col-lg-7">
        <div class="py-4 px-3">
            <div class="text-danger mb-3">
                (*) <?php echo e(__('Required')); ?>

            </div>
            <div class="mb-3">
                <label class='form-label' for="orderer_name"><?php echo e(__('Orderer Name')); ?> <span
                        class="text-danger">(*)</span></label>
                <input type="text" wire:model.live='orderer_name'
                    class="form-control  <?php $__errorArgs = ['orderer_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="<?php echo e(__('Orderer Name')); ?>">
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['orderer_name'];
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
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="mb-3">
                <div wire:ignore>
                    <label class='form-label' for="date"><?php echo e(__('Date')); ?> <span
                            class="text-danger">(*)</span></label>
                    <input wire:model.live='date' type='text'
                        class="form-control datepicker <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        style="background-color:#fff; cursor:pointer;" placeholder="<?php echo e(__('Select a date')); ?>" readonly>
                </div>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['date'];
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
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="mb-3">
                <label class='form-label' for="time"><?php echo e(__('Expectation Time')); ?> <span
                        class="text-danger">(*)</span></label>
                <select wire:model.live='time' class="form-select <?php $__errorArgs = ['time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="<?php echo e(__('Expecation Time')); ?>">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item); ?>"><?php echo e($item); ?> WIB</option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </select>
                <div class="mt-1 small text-muted">
                    <?php echo e(__('Expected time is the time you estimate to arrive at the location and use the unit. The time of this hope is not fixed. You can change the time according to your wishes when you arrive at the location on the date you have set.')); ?>

                </div>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['time'];
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
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="mb-3">
                <h6><?php echo e(__('Select the package you want to order.')); ?></h6>
                <div class="row">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="package-checkbox">
                                <input type="checkbox" id="package-<?php echo e($idx); ?>"
                                    wire:model.live='selected_package.<?php echo e($idx); ?>'>
                                <label for="package-<?php echo e($idx); ?>">
                                    <div class="img-box">
                                        <img src="<?php echo e($package->image_path); ?>" alt="Package Image">
                                    </div>
                                    <div class="title">
                                        <?php echo e($package->title); ?>

                                    </div>
                                    <div class="price">
                                        <?php echo e(PriceHelper::idr($package->price, 0, true)); ?>

                                    </div>
                                </label>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="p-4"
            style="background: linear-gradient(var(--section-primary), var(--section-primary)); position:sticky; top: 6rem;">
            <h5 class="mb-4"><?php echo e(__('Transaction Detail')); ?></h5>

            <table class="table table-bordered">
                <tr>
                    <th colspan=2><?php echo e(__('Orderer Name')); ?></th>
                    <td colspan=2><?php echo e($orderer_name); ?></td>
                </tr>
                <tr>
                    <th colspan=2><?php echo e(__('Date')); ?></th>
                    <td colspan=2>
                        <?php echo e($date ? Carbon::createFromFormat('d/m/Y', $date)->translatedFormat('l, d M Y') : __('No date selected')); ?>

                    </td>
                </tr>
                <tr>
                    <th colspan=2><?php echo e(__('Expectation Time')); ?></th>
                    <td colspan=2><?php echo e(Carbon::parse($time)->translatedFormat('H:i')); ?> WIB</td>
                </tr>
                <tr>
                    <th class="text-center" colspan=4><?php echo e(__('Reservation Detail')); ?></th>
                </tr>
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $selected_packages_show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="text-center" width=30px><?php echo e($loop->iteration); ?></td>
                        <td colspan=2><?php echo e($item['title']); ?> <span
                                class="fst-italic small"><?php echo e('@' . PriceHelper::idr($item['price'], 0, true)); ?></span>
                        </td>
                        <td width=120px>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-danger p-0"
                                    style="width:50px !important; aspect-ratio:1/1;"
                                    wire:click='decrement(<?php echo e($item['selected_id']); ?>)' wire:loading.attr='disabled'
                                    wire:target='increment,decrement'>-</button>
                                <span
                                    class="w-100 text-center bg-white py-1"><?php echo e($selected_package[$item['selected_id']]['amount']); ?></span>
                                <button class="btn btn-sm btn-danger p-0"
                                    style="width:50px !important; aspect-ratio:1/1;"
                                    wire:click='increment(<?php echo e($item['selected_id']); ?>)' wire:loading.attr='disabled'
                                    wire:target='increment,decrement'>+</button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td class="text-center" colspan=4>
                            <?php echo e(__('No data found.')); ?>

                        </td>
                    </tr>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                <tr>
                    <th colspan=2><?php echo e(__('Total Package')); ?></th>
                    <th colspan=2 class="text-end"><?php echo e(PriceHelper::idr($total_package)); ?></th>
                </tr>
                <tr>
                    <th colspan=2><?php echo e(__('Total Payment')); ?></th>
                    <th colspan=2 class="text-end"><?php echo e(PriceHelper::idr($total_payment, 0, true)); ?></th>
                </tr>
            </table>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selected_package'];
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
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selected_package.*.amount'];
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
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
            <div class="mt-4">
                <button class="btn btn-primary w-100" wire:click='store_reservation' wire:loading.attr='disabled'>
                    <?php echo e(__('Book Now')); ?>

                </button>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $(".datepicker").datepicker({
            numberOfMonths: 3,
            dateFormat: "dd/mm/yy",
            changeMonth: true,
            changeYear: true,
            minDate: '<?php echo e(date('d/m/Y')); ?>',
            // beforeShowDay: function(date) {
            //     var day = date.getDay();
            //     return [day == 6 || day == 0, ''];
            // },
            onSelect: function(a, b) {
                window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('date', a)
            }
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/livewire/frontend/reservation/book.blade.php ENDPATH**/ ?>