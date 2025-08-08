<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">
            <?php echo e(__('Edit :edit', ['edit' => __('User')])); ?>

        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label class="form-label" for="edit_username"><?php echo e(__('Username')); ?> <span
                    class="text-danger">(*)</span></label>
            <input type="text" class="form-control" id="edit_username" wire:model='username'
                placeholder="<?php echo e(__('Username')); ?>">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['username'];
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
            <label class="form-label" for="edit_name"><?php echo e(__('Name')); ?> <span class="text-danger">(*)</span></label>
            <input type="text" class="form-control" id="edit_name" wire:model='name'
                placeholder="<?php echo e(__('Name')); ?>">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
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
            <label class="form-label" for="edit_email"><?php echo e(__('Email')); ?> <span class="text-danger">(*)</span></label>
            <input type="email" class="form-control" id="edit_email" wire:model='email'
                placeholder="<?php echo e(__('Email')); ?>">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
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

        <span class="text-danger">(*) <?php echo e(__('Required')); ?></span>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            <?php echo e(__('Close')); ?>

        </a>
        <button class="btn btn-primary ms-auto" wire:click='update_user'>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-script-plus" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M17 19h4"></path>
                <path d="M14 20h-8a3 3 0 0 1 0 -6h11a3 3 0 0 0 -3 3m7 -3v-8a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v8">
                </path>
                <path d="M19 17v4"></path>
            </svg>
            <?php echo e(__('Edit :edit', ['edit' => __('User')])); ?>

        </button>
        <div class="w-100" wire:loading.block>
            <div class="progress">
                <div class="progress-bar progress-bar-indeterminate bg-primary"></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/livewire/backend/user/edit-modal.blade.php ENDPATH**/ ?>