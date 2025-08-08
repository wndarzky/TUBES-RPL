<?php $__env->startSection('title', __('Dashboard')); ?>
<?php $__env->startSection('content'); ?>
    
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    
                    <div class="page-pretitle">
                        <?php echo e(__('Overview')); ?>

                    </div>
                    <h2 class="page-title">
                        <?php echo e(__('Dashboard')); ?>

                    </h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader"><?php echo e(__('Reservation Complete')); ?></div>
                            </div>
                            <div class="h1 mb-3"><?php echo e($percentage_of_reservation_complete); ?>%</div>
                            <div class="d-flex mb-2">
                                <div><?php echo e(__('Conversion rate')); ?></div>
                                <div class="ms-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        <?php echo e($percentage_of_reservation_complete); ?>%
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 17l6 -6l4 4l8 -8" />
                                            <path d="M14 7l7 0l0 7" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary"
                                    style="width: <?php echo e($percentage_of_reservation_complete); ?>%" role="progressbar"
                                    aria-valuenow="<?php echo e($percentage_of_reservation_complete); ?>" aria-valuemin="0"
                                    aria-valuemax="100" aria-label="75% Complete">
                                    <span class="visually-hidden"><?php echo e($percentage_of_reservation_complete); ?>% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader"><?php echo e(__('Revenue Total')); ?></div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2"><?php echo e(PriceHelper::idr($revenue_total, 0, true)); ?></div>
                            </div>
                        </div>
                        <div id="chart-revenue-bg" class="chart-sm"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader"><?php echo e(__('Revenue Last Month')); ?></div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2"><?php echo e(PriceHelper::idr($revenue_last_month, 0, true)); ?></div>
                            </div>
                        </div>
                        <div id="chart-revenue-bg" class="chart-sm"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader"><?php echo e(__('Revenue This Month')); ?></div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2"><?php echo e(PriceHelper::idr($revenue_this_month, 0, true)); ?></div>
                                <div class="me-auto">
                                    <?php if($is_revenue_increase): ?>
                                        <span class="text-green d-inline-flex align-items-center lh-1">
                                            <?php echo e($revenue_last_month > 0 ? (($revenue_this_month - $revenue_last_month) / $revenue_last_month) * 100 : 100); ?>%
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 17l6 -6l4 4l8 -8" />
                                                <path d="M14 7l7 0l0 7" />
                                            </svg>
                                        </span>
                                    <?php else: ?>
                                        <span class="text-danger d-inline-flex align-items-center lh-1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-trending-down" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 7l6 6l4 -4l8 8"></path>
                                                <path d="M21 10l0 7l-7 0"></path>
                                            </svg>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div id="chart-revenue-bg" class="chart-sm"></div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="row row-cards">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-warning text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-book-2" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
                                                    <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                                                    <path d="M9 8h6"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <?php echo e(__(':count Reservations', ['count' => $waiting_for_payment_count])); ?>

                                            </div>
                                            <div class="text-muted">
                                                <?php echo e(__('Waiting for Payment')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <a class="stretched-link"
                                        href="<?php echo e(route('dashboard.reservation', ['filter' => ReservationType::WaitingForPayment])); ?>"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-info text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-book-2" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
                                                    <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                                                    <path d="M9 8h6"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <?php echo e(__(':count Reservations', ['count' => $ready_for_action_count])); ?>

                                            </div>
                                            <div class="text-muted">
                                                <?php echo e(__('Ready for Action')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <a class="stretched-link"
                                        href="<?php echo e(route('dashboard.reservation', ['filter' => ReservationType::ReadyForAction])); ?>"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-success text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-book-2" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
                                                    <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                                                    <path d="M9 8h6"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <?php echo e(__(':count Reservations', ['count' => $completed_count])); ?>

                                            </div>
                                            <div class="text-muted">
                                                <?php echo e(__('Completed')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <a class="stretched-link"
                                        href="<?php echo e(route('dashboard.reservation', ['filter' => ReservationType::Completed])); ?>"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-danger text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-book-2" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
                                                    <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                                                    <path d="M9 8h6"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <?php echo e(__(':count Reservations', ['count' => $canceled_count])); ?>

                                            </div>
                                            <div class="text-muted">
                                                <?php echo e(__('Canceled')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <a class="stretched-link"
                                        href="<?php echo e(route('dashboard.reservation', ['filter' => ReservationType::Canceled])); ?>"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3"><?php echo e(__('Last Reservation Completed')); ?></h3>
                            <table class="table table-vcenter">
                                <thead>
                                    <th></th>
                                    <th><?php echo e(__('Orderer Name')); ?></th>
                                    <th><?php echo e(__('Date')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $last_reservation_completed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo e(route('dashboard.reservation.show', $reservation->id)); ?>">
                                                    #<?php echo e($reservation->id); ?>

                                                </a>
                                            </td>
                                            <td><?php echo e($reservation->orderer_name); ?></td>
                                            <td><?php echo e(Carbon::parse($reservation->date)->translatedFormat('d M Y')); ?></td>
                                            <td>
                                                <?php if($reservation->status == 'waiting_for_payment'): ?>
                                                    <span class="status status-yellow">
                                                        <?php echo e(__('Waiting for Payment')); ?>

                                                    </span>
                                                <?php elseif($reservation->status == 'ready_for_action'): ?>
                                                    <span class="status status-blue">
                                                        <?php echo e(__('Ready for Action')); ?>

                                                    </span>
                                                <?php elseif($reservation->status == 'canceled'): ?>
                                                    <span class="status status-red">
                                                        <?php echo e(__('Reservation Canceled')); ?>

                                                    </span>
                                                <?php else: ?>
                                                    <span class="status status-green">
                                                        <?php echo e(__('Reservation Completed')); ?>

                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan=4 class="text-center">
                                                <?php echo e(__('No data found.')); ?>

                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3">
                                <?php echo e(__('Unit Usage')); ?>

                            </h3>
                            <table class="table card-table table-vcenter">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('Unit Name')); ?></th>
                                        <th colspan="2"><?php echo e(__('Usage')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $unit_usages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo e(route('dashboard.unit')); ?>">
                                                    <?php echo e($unit['unit_name']); ?>

                                                </a>
                                            </td>
                                            <td>
                                                <?php echo e(PriceHelper::idr($unit['unit_usage'])); ?>

                                            </td>
                                            <td class="w-50">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-primary"
                                                        style="width: <?php echo e($unit['percentage']); ?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/backend/pages/home/index.blade.php ENDPATH**/ ?>