<?php $__env->startSection('content'); ?>
    <div class="auth">
        <div class="auth-form">
            <a href="<?php echo e(route('home')); ?>">
                <img class="auth-logo" src="<?php echo e(asset('branding-assets/img/logo.png')); ?>">
            </a>
            <div class="col-8">
                <h5 class="text-primary"><?php echo e(__('Register')); ?></h5>
                <div class="small text-muted">
                    <?php echo e(__('Register your account for ease of ordering.')); ?>

                </div>
            </div>

            <form class="mt-4" action="<?php echo e(route('register.do')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label" for="username"><?php echo e(__('Username')); ?></label>
                    <input type="text" name="username" id="username" class="form-control" required autofocus
                        value="<?php echo e(old('username')); ?>">
                    <div class="text-muted small mt-1">
                        <?php echo e(__("Username must be at least 8 characters, no spaces, and no symbols (except '-' and '_').")); ?>

                    </div>
                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger small mt-1">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name"><?php echo e(__('Full Name')); ?></label>
                    <input type="text" name="name" id="name" class="form-control" required autofocus
                        value="<?php echo e(old('name')); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger small mt-1">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email"><?php echo e(__('Email')); ?></label>
                    <input type="text" name="email" id="email" class="form-control" required autofocus
                        value="<?php echo e(old('email')); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger small mt-1">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password"><?php echo e(__('Password')); ?></label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    <div class="text-muted small mt-1">
                        <?php echo e(__('Password consist of a combination of letters and numbers.')); ?>

                    </div>
                    <div class="text-muted small mt-1">
                        <?php echo e(__('Password must be at least 8 characters.')); ?>

                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger small mt-1">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="re_password"><?php echo e(__('Re-Password')); ?></label>
                    <input type="password" name="re_password" id="re_password" class="form-control" required>
                    <?php $__errorArgs = ['re_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger small mt-1">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary w-100">
                        <?php echo e(__('Register')); ?>

                    </button>
                    <div class="text-center mt-2">
                        <a href="<?php echo e(route('login')); ?>">
                            <?php echo e(__('Already have an account?')); ?>

                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/auth/pages/register.blade.php ENDPATH**/ ?>