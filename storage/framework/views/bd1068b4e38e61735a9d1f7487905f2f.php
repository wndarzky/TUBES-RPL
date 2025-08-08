<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
                <img src="<?php echo e(asset('branding-assets/img/logo.png')); ?>" width="110" height="32" alt="Tabler"
                    class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="d-none d-md-flex me-3">
                
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                    </svg>
                </a>
                
                <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                    </svg>
                </a>
            </div>
            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(<?php echo e(Auth::user()->image_path); ?>)"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div><?php echo e(Auth::user()->name); ?></div>
                        <div class="mt-1 small text-muted"><?php echo e(Auth::user()->role_name); ?></div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="<?php echo e(route('home')); ?>" class="dropdown-item"><?php echo e(__('Home')); ?></a>
                    <form action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <button class="dropdown-item">
                            <?php echo e(__('Log Out')); ?>

                        </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</header>
<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item <?php if(request()->routeIs('dashboard.home')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="<?php echo e(route('dashboard.home')); ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                <?php echo e(__('Dashboard')); ?>

                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown <?php if(request()->routeIs('dashboard.unit*') ||
                            request()->routeIs('dashboard.package*') ||
                            request()->routeIs('dashboard.payment*')): ?> active <?php endif; ?>">
                        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path
                                        d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path
                                        d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path
                                        d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                <?php echo e(__('Data Master')); ?>

                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item <?php if(request()->routeIs('dashboard.unit')): ?> active <?php endif; ?>"
                                        href="<?php echo e(route('dashboard.unit')); ?>">
                                        <?php echo e(__('Meja')); ?>

                                    </a>
                                    <a class="dropdown-item <?php if(request()->routeIs('dashboard.payment_vendor')): ?> active <?php endif; ?>"
                                        href="<?php echo e(route('dashboard.payment_vendor')); ?>">
                                        <?php echo e(__('Payment Vendor')); ?>

                                    </a>
                                    <a class="dropdown-item <?php if(request()->routeIs('dashboard.package')): ?> active <?php endif; ?>"
                                        href="<?php echo e(route('dashboard.package')); ?>">
                                        <?php echo e(__('Package')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item <?php if(request()->routeIs('dashboard.reservation')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="<?php echo e(route('dashboard.reservation')); ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-window-maximize" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z">
                                    </path>
                                    <path d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6"></path>
                                    <path d="M12 8h4v4"></path>
                                    <path d="M16 8l-5 5"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                <?php echo e(__('Reservation')); ?>

                                
                            </span>
                        </a>
                    </li>
                    <li class="nav-item <?php if(request()->routeIs('dashboard.schedule')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="<?php echo e(route('dashboard.schedule')); ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-bolt"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4c.267 0 .529 .026 .781 .076"></path>
                                    <path d="M19 16l-2 3h4l-2 3"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                <?php echo e(__('Jadwal Booking Meja')); ?>

                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown <?php if(request()->routeIs('dashboard.report*')): ?> active <?php endif; ?>">
                        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path
                                        d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path
                                        d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path
                                        d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                <?php echo e(__('Report')); ?>

                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item <?php if(request()->routeIs('dashboard.report.unit')): ?> active <?php endif; ?>"
                                        href="<?php echo e(route('dashboard.report.unit')); ?>">
                                        <?php echo e(__('Unit Report')); ?>

                                    </a>
                                    <a class="dropdown-item <?php if(request()->routeIs('dashboard.report.reservation')): ?> active <?php endif; ?>"
                                        href="<?php echo e(route('dashboard.report.reservation')); ?>">
                                        <?php echo e(__('Reservation Report')); ?>

                                    </a>
                                    <a class="dropdown-item <?php if(request()->routeIs('dashboard.report.revenue')): ?> active <?php endif; ?>"
                                        href="<?php echo e(route('dashboard.report.revenue')); ?>">
                                        <?php echo e(__('Revenue Report')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item <?php if(request()->routeIs('dashboard.user')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="<?php echo e(route('dashboard.user')); ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-bolt"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4c.267 0 .529 .026 .781 .076"></path>
                                    <path d="M19 16l-2 3h4l-2 3"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                <?php echo e(__('User Management')); ?>

                            </span>
                        </a>
                    </li>
                    <li class="nav-item <?php if(request()->routeIs('dashboard.account')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="<?php echo e(route('dashboard.account')); ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-window-maximize" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z">
                                    </path>
                                    <path d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6"></path>
                                    <path d="M12 8h4v4"></path>
                                    <path d="M16 8l-5 5"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                <?php echo e(__('Account Settings')); ?>

                                
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/backend/partials/navbar.blade.php ENDPATH**/ ?>