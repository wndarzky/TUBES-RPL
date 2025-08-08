<div>
    
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    
                    <h2 class="page-title">
                        <?php echo e(__('User')); ?>

                    </h2>
                </div>
                
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <button class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            wire:click="$dispatch('refresh_create_form')" data-bs-target="#create-user-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            <?php echo e(__('Create :create', ['create' => __('User')])); ?>

                        </button>
                        <button class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                            data-bs-target="#create-user-modal" wire:click="$dispatch('refresh_create_form')"
                            aria-label="<?php echo e(__('Create :create', ['create' => __('User')])); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e(__(':data Data', ['data' => __('User')])); ?></h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-muted">
                                    <?php echo e(__('Show')); ?>

                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm"
                                            wire:model.lazy="show" size="3" wire:change='set_reset_page'>
                                    </div>
                                    <?php echo e(__('entries')); ?>

                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary" <?php if($with_trashed === false): ?> disabled <?php endif; ?>
                                        wire:click='set_trashed(false)'>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-archive" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10"></path>
                                            <path d="M10 12l4 0"></path>
                                        </svg>
                                        <?php echo e(__('All')); ?>

                                    </button>
                                    <button class="btn btn-primary" <?php if($with_trashed === true): ?> disabled <?php endif; ?>
                                        wire:click='set_trashed(true)'>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-archive-off" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 4h11a2 2 0 1 1 0 4h-7m-4 0h-3a2 2 0 0 1 -.826 -3.822"></path>
                                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 1.824 -1.18m.176 -3.82v-7">
                                            </path>
                                            <path d="M10 12h2"></path>
                                            <path d="M3 3l18 18"></path>
                                        </svg>
                                        <?php echo e(__('Trashed')); ?>

                                    </button>
                                </div>
                                <div class="text-muted">
                                    <?php echo e(__('Search:')); ?>

                                    <div class="ms-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm"
                                            aria-label="Search" wire:model.live="search"
                                            wire:change='set_reset_page'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th class="w-1">No.</th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Email')); ?></th>
                                        <th><?php echo e(__('Role')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td>
                                                <?php echo e($users->perPage() * ($users->currentPage() - 1) + $loop->iteration); ?>

                                            </td>
                                            <td>
                                                <div class="d-flex py-1 align-items-center">
                                                    <span class="avatar me-2"
                                                        style="background-image: url(<?php echo e($user->image_path); ?>); --tblr-avatar-size:6rem"></span>
                                                    <div class="flex-fill">
                                                        <div class="font-weight-medium"> <?php echo e($user->name); ?>

                                                        </div>
                                                        <div class="text-muted">
                                                            <span class="text-reset fst-italic">
                                                                <?php echo e($user->username); ?>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <?php echo e($user->email); ?>

                                            </td>
                                            <td>
                                                <!--[if BLOCK]><![endif]--><?php if($user->role_name == 'User'): ?>
                                                    <span class="badge bg-green-lt"><?php echo e($user->role_name); ?></span>
                                                <?php elseif($user->role_name == 'Administrator'): ?>
                                                    <span class="badge bg-cyan-lt"><?php echo e($user->role_name); ?></span>
                                                <?php elseif($user->role_name == 'Owner'): ?>
                                                    <span class="badge bg-yellow-lt"><?php echo e($user->role_name); ?></span>
                                                <?php elseif($user->role_name == 'Finance'): ?>
                                                    <span class="badge bg-purple-lt"><?php echo e($user->role_name); ?></span>
                                                <?php else: ?>
                                                    <span class="badge bg-red-lt"><?php echo e($user->role_name); ?></span>
                                                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                            </td>
                                            <td>
                                                <!--[if BLOCK]><![endif]--><?php if($user->status == 'active'): ?>
                                                    <span class="badge bg-green-lt"><?php echo e(__('Active')); ?></span>
                                                <?php else: ?>
                                                    <span class="badge bg-red-lt"><?php echo e(__('Blocked')); ?></span>
                                                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                            </td>
                                            <td class="text-end">
                                                <!--[if BLOCK]><![endif]--><?php if(!$user->trashed()): ?>
                                                    <!--[if BLOCK]><![endif]--><?php if($user->role_name != 'Administrator'): ?>
                                                        <!--[if BLOCK]><![endif]--><?php if($user->status == 'active'): ?>
                                                            <button class="btn btn-sm btn-dark"
                                                                wire:click="set_active_status(<?php echo e($user->id); ?>)">
                                                                <?php echo e(__('Block')); ?>

                                                            </button>
                                                        <?php else: ?>
                                                            <button class="btn btn-sm btn-primary"
                                                                wire:click="set_active_status(<?php echo e($user->id); ?>)">
                                                                <?php echo e(__('Activate')); ?>

                                                            </button>
                                                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                    <!--[if BLOCK]><![endif]--><?php if(!in_array($user->role_name, ['User', 'Administrator'])): ?>
                                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#edit-user-modal"
                                                            wire:click="$dispatch('refresh_edit_form',{id:<?php echo e($user->id); ?>})"
                                                            aria-label="<?php echo e(__('Edit :edit', ['edit' => __('User')])); ?>">
                                                            <?php echo e(__('Edit')); ?>

                                                        </button>
                                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                    <!--[if BLOCK]><![endif]--><?php if($user->role_name != 'Administrator'): ?>
                                                        <button class="btn btn-sm btn-danger"
                                                            wire:click="delete_item(<?php echo e($user->id); ?>)">
                                                            <?php echo e(__('Delete')); ?>

                                                        </button>
                                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                <?php else: ?>
                                                    <button class="btn btn-sm btn-info"
                                                        wire:click="restore_item(<?php echo e($user->id); ?>)">
                                                        <?php echo e(__('Restore')); ?>

                                                    </button>
                                                    <button class="btn btn-sm btn-danger"
                                                        wire:click="force_delete_item(<?php echo e($user->id); ?>)">
                                                        <?php echo e(__('Force Delete')); ?>

                                                    </button>
                                                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td class="text-center" colspan=6>
                                                <?php echo e(__('No data found.')); ?>

                                            </td>
                                        </tr>
                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center">
                            <?php echo e($users->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/livewire/backend/user/index.blade.php ENDPATH**/ ?>