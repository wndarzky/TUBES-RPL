<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">
            <?php echo e(__('Edit :edit', ['edit' => __('Package')])); ?>

        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label class="form-label" for="image"><?php echo e(__('Image')); ?> </label>
            <input type="file" class="form-control" id="image" wire:model='image' accept="image/*"
                placeholder="<?php echo e(__('Image')); ?>" wire:loading.attr='disabled'>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['image'];
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
            <label class="form-label" for="edit_package"><?php echo e(__('Title')); ?> <span
                    class="text-danger">(*)</span></label>
            <input type="text" class="form-control" id="edit_package" wire:model='title'
                placeholder="<?php echo e(__('Package Title')); ?>">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['package'];
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
            <label class="form-label" for="edit_price"><?php echo e(__('Price')); ?> <span class="text-danger">(*)</span></label>
            <input type="number" class="form-control" id="edit_price" wire:model='price'
                placeholder="<?php echo e(__('Register Number')); ?>">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['price'];
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
            <label class="form-label" for="edit_description"><?php echo e(__('Description')); ?></label>
            <input type="text" class="form-control" id="edit_description" wire:model='description'
                placeholder="<?php echo e(__('Description')); ?>">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['description'];
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
        <button class="btn btn-primary ms-auto" wire:click='update_package'>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-script-plus" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M17 19h4"></path>
                <path d="M14 20h-8a3 3 0 0 1 0 -6h11a3 3 0 0 0 -3 3m7 -3v-8a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v8">
                </path>
                <path d="M19 17v4"></path>
            </svg>
            <?php echo e(__('Edit :edit', ['edit' => __('Package')])); ?>

        </button>
        <div class="w-100" wire:loading.block>
            <div class="progress">
                <div class="progress-bar progress-bar-indeterminate bg-primary"></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/livewire/backend/package/edit-modal.blade.php ENDPATH**/ ?>