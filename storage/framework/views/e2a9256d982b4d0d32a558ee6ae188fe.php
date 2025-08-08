<?php $__env->startSection('content'); ?>
    <div class="auth">
        <div class="auth-form">
            <a href="<?php echo e(route('home')); ?>">
                <img class="auth-logo" src="<?php echo e(asset('branding-assets/img/logo.png')); ?>">
            </a>
            <div class="col-8">
                <h5 class="text-primary"><?php echo e(__('Log In')); ?></h5>
                <div class="small text-muted">
                    <?php echo e(__('Please log in first.')); ?>

                </div>
            </div>

            <form class="mt-4" action="<?php echo e(route('login.do')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label" for="username"><?php echo e(__('Username')); ?></label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo e(old('username')); ?>"
                        required autofocus>
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
                    <label class="form-label" for="password"><?php echo e(__('Password')); ?></label>
                    <input type="password" name="password" id="password" class="form-control" required>
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
                    <div class="d-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me">
                            <label class="form-check-label" for="remember_me">
                                <?php echo e(__('Remember Me')); ?>

                            </label>
                        </div>
                        <a href="<?php echo e(route('register')); ?>">
                            <?php echo e(__('Forgot password?')); ?>

                        </a>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary w-100">
                        <?php echo e(__('Log In')); ?>

                    </button>
                    <div class="text-center mt-2">
                        <a href="<?php echo e(route('register')); ?>">
                            <?php echo e(__('Don\'t have an account?')); ?>

                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/auth/pages/login.blade.php ENDPATH**/ ?>