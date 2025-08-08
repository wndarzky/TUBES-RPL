<script src="<?php echo e(asset('backend-assets/libs/apexcharts/dist/apexcharts.min.js?1684106062')); ?>" defer></script>
<script src="<?php echo e(asset('backend-assets/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062')); ?>" defer></script>
<script src="<?php echo e(asset('backend-assets/libs/jsvectormap/dist/maps/world.js?1684106062')); ?>" defer></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script src="<?php echo e(asset('backend-assets/js/tabler.min.js?1684106062')); ?>" defer></script>
<script src="<?php echo e(asset('backend-assets/js/demo.min.js?1684106062')); ?>" defer></script>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-alert::components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-alert::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<script type="text/javascript">
    const lightbox = GLightbox();

    document.addEventListener('modal-close', () => {
        console.log('Reset Modal')
        // let modal = new Modal()
        // modal._hideModal()
        // document.querySelector('.modal').modal()
    });

    document.addEventListener('glightboxReset', () => {
        lightbox.reload()
    })
</script>
<?php echo $__env->yieldPushContent('scripts'); ?>
<?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/backend/partials/js.blade.php ENDPATH**/ ?>