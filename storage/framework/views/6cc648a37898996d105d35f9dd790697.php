<div class="card">
    <div class="card-body">
        <h3 class="mb-3"><?php echo e(__('Password')); ?></h3>
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="mb-3">
            <label for="current_password" class="form-label"><?php echo e(__('Current Password')); ?></label>
            <input type="password" wire:model="current_password" wire:loading.attr='disabled' wire:target='save_password'
                id="current_password" class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['current_password'];
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
            <label for="new_password" class="form-label"><?php echo e(__('New Password')); ?></label>
            <input type="password" wire:model="new_password" wire:loading.attr='disabled'
                wire:target='save_password' id="new_password"
                class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
            <div class="text-muted small mt-1">
                <?php echo e(__('Password consist of a combination of letters and numbers.')); ?>

            </div>
            <div class="text-muted small mt-1">
                <?php echo e(__('Password must be at least 8 characters.')); ?>

            </div>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['new_password'];
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
            <label for="re_password" class="form-label"><?php echo e(__('Re-Password')); ?></label>
            <input type="password" wire:model="re_password" wire:loading.attr='disabled' wire:target='save_password'
                id="re_password" class="form-control <?php $__errorArgs = ['re_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['re_password'];
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
        <div class="mt-4 text-end">
            <button type="submit" class="btn btn-primary" wire:click='save_password' wire:loading.attr='disabled'>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-chevron-down"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M15 11l-3 3l-3 -3"></path>
                    <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
                </svg>
                <?php echo e(__('Save')); ?>

            </button>
        </div>
    </div>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/livewire/backend/account/password.blade.php ENDPATH**/ ?>