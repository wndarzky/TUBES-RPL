<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand order-1 order-lg-0">
                <img class="img-fluid" src="<?php echo e(asset('branding-assets/img/logo.png')); ?>" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0 order-0 order-lg-1" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ps-lg-4 order-2">
                <?php if(Auth::check() && Auth::user()->roleName == 'Administrator'): ?>
                    <a href="<?php echo e(route('dashboard.home')); ?>"
                        class="btn btn-danger btn-book text-uppercase px-4 py-2 me-2">
                        <span class="d-none d-lg-block">
                            <?php echo e(__('Dashboard')); ?>

                        </span>
                        <span class="d-block d-lg-none">
                            <i class="bi bi-fire"></i>
                        </span>
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('reservation')); ?>" class="btn btn-danger btn-book text-uppercase px-4 py-2 me-2">
                        <span class="d-none d-lg-block">
                            <?php echo e(__('Book Now')); ?>

                        </span>
                        <span class="d-block d-lg-none">
                            <i class="bi bi-journal-arrow-up"></i>
                        </span>
                    </a>
                <?php endif; ?>

                <?php if(auth()->guard()->check()): ?>
                    <div class="dropdown d-inline-block dropdown-account">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">
                            <img class="rounded-circle" style="width:40px; aspect-ratio:1/1"
                                src="<?php echo e(Auth::user()->image_path); ?>" alt="Avatar">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <h6 class="dropdown-header">
                                    Hai, <?php echo e(Auth::user()->name); ?>!
                                </h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <?php if(Auth::user()->isUser): ?>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('account.history')); ?>">
                                        <i class="bi bi-journal-bookmark"></i>
                                        <span class="small">
                                            <span
                                                class="badge bg-success"><?php echo e(Auth::user()->reservations()->completedStatus()->count()); ?></span>
                                            <span
                                                class="badge bg-warning"><?php echo e(Auth::user()->reservations()->waitingStatus()->count()); ?></span>
                                            <span
                                                class="badge bg-info"><?php echo e(Auth::user()->reservations()->readyStatus()->count()); ?></span>
                                            <span
                                                class="badge bg-danger"><?php echo e(Auth::user()->reservations()->canceledStatus()->count()); ?></span>
                                        </span>
                                        <?php echo e(__('History')); ?>

                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('account')); ?>">
                                        <i class="bi bi-arrow-up-right-square"></i>
                                        <?php echo e(__('Setting')); ?>

                                    </a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('dashboard.home')); ?>">
                                        <i class="bi bi-arrow-up-right-square"></i>
                                        <?php echo e(__('Dashboard')); ?>

                                    </a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <form action="<?php echo e(route('logout')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <button class="dropdown-item">
                                        <i class="bi bi-box-arrow-left"></i>
                                        <?php echo e(__('Log Out')); ?>

                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a class="btn btn-primary text-uppercase px-4 py-2" href="<?php echo e(route('register')); ?>">
                        <span class="d-none d-lg-inline">
                            <?php echo e(__('Register')); ?>

                        </span>
                        <span class="d-inline d-lg-none">
                            <i class="bi bi-box-arrow-in-right"></i>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
            <div class="collapse navbar-collapse order-3 order-lg-1" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="<?php echo e(route('home')); ?>#" class="nav-item nav-link"><?php echo e(__('Home')); ?></a>
                    <a href="<?php echo e(route('home')); ?>#about-us" class="nav-item nav-link"><?php echo e(__('About Us')); ?></a>
                    <a href="<?php echo e(route('home')); ?>#unit" class="nav-item nav-link"><?php echo e(__('Meja')); ?></a>
                    <a href="<?php echo e(route('home')); ?>#package" class="nav-item nav-link"><?php echo e(__('Package')); ?></a>
                    <a href="<?php echo e(route('home')); ?>#testimonial" class="nav-item nav-link"><?php echo e(__('Testimoni')); ?></a>
                    <a href="<?php echo e(route('home')); ?>#contact-us" class="nav-item nav-link"><?php echo e(__('Contact Us')); ?></a>
                    
                </div>
            </div>
        </nav>
    </div>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/frontend/partials/navbar.blade.php ENDPATH**/ ?>