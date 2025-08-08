<?php $__env->startSection('content'); ?>
    
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo e(asset('frontend-assets/img/carousel-1.png')); ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">
                                        <?php echo e(__('Welcome to')); ?> <strong class="text-primary">
                                            <?php echo e(('Eloria!')); ?></strong></p>
                                    <h1 class="display-3 text-primary mb-4 animated zoomIn">
                                        <?php echo e(__('mengajak Anda menjelajah dunia melalui rasa.')); ?>

                                    </h1>
                                    <a href="<?php echo e(route('reservation')); ?>"
                                        class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">
                                        <?php echo e(__('Book Now')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo e(asset('frontend-assets/img/carousel-2.png')); ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">
                                        <?php echo e(__('Welcome to')); ?> <strong class="text-primary">
                                            <?php echo e(('Restoran Eloria!')); ?></strong></p>
                                    </p>
                                    <h1 class="display-3 text-primary mb-4 animated zoomIn">
                                        <?php echo e(__('We will serve you with love')); ?>

                                    </h1>
                                    <a href="<?php echo e(route('reservation')); ?>"
                                        class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">
                                        <?php echo e(__('Book Now')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    

    
    <div class="container-xxl py-5" id="about-us">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s"
                                src="<?php echo e(asset('frontend-assets/img/about-1.jpg')); ?>" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.2s"
                                src="<?php echo e(asset('frontend-assets/img/about-2.png')); ?>" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.3s"
                                src="<?php echo e(asset('frontend-assets/img/about-3.jpg')); ?>" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s"
                                src="<?php echo e(asset('frontend-assets/img/about-4.jpg')); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary"><?php echo e(__('About Us')); ?></p>
                        <h1 class="display-6">
                            <?php echo e(__('The Best Online Reservation Restaurant in Bandung City')); ?>

                        </h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="<?php echo e(asset('frontend-assets/img/about-5.jpg')); ?>"
                                alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5><?php echo e(__('Target Pasar & Pengalaman yang Ditawarkan')); ?></h5>
                            <p class="mb-0">
                                <?php echo e(__('Apapun momennya, Eloria selalu siap menghadirkan suasana hangat dan rasa yang menggoda.')); ?>

                            </p>
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5><?php echo e(__('Menu dan Keunikan Cita Rasa')); ?></h5>
                            <p class="mb-0">
                                <?php echo e(__('Nikmati [Menu Unggulan], dibuat dari bahan segar pilihan dan resep rahasia chef kami, khusus untuk memanjakan lidah Anda.".')); ?>

                            </p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="<?php echo e(asset('frontend-assets/img/about-6.jpg')); ?>"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <div class="container-fluid product py-5 my-5" id="unit">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary"><?php echo e(__('Table Set')); ?></p>
                <h1 class="display-6">
                    <?php echo e(__('Meja yang dapat anda reservasi sesuai dengan moment anda.')); ?>

                </h1>
            </div>
            <div class="owl-carousel unit-carousel wow fadeInUp" data-wow-delay="0.5s">
                <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="d-block product-item rounded">
                        <div class="d-flex justify-content-center align-items-center"
                            style="max-height: 300px; overflow:hidden;">
                            <img src="<?php echo e($unit->image_path); ?>" alt="Unit Image">
                        </div>
                        <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                            <h4 class="text-primary"><?php echo e($unit->name); ?></h4>
                            <span class="text-body">
                                <?php echo e($unit->description ?? __('"Ciptakan momen romantis berdua di Moon Light(2),"Nikmati tawa dan cerita bersama keluarga di Family Feast Table(6),Rayakan momen besar bersama orang-orang terdekat di Grand Table(10).')); ?>

                            </span>
                        </div>
                    </span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    

    
    <div class="container-xxl py-5" id="package">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">
                    <?php echo e(__('Package')); ?>

                </p>
                <h1 class="display-6"><?php echo e(__('The packages we offer for you.')); ?></h1>
            </div>
            <div class="row g-4">
                <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp"
                        data-wow-delay="<?php echo e(0.1 + ($loop->iteration - 1) * 0.2); ?>s">
                        <div class="store-item position-relative text-center">
                            <img class="img-fluid" src="<?php echo e($package->image_path); ?>" alt="">
                            <div class="p-4">
                                <div class="text-center mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <h4 class="mb-3"><?php echo e($package->title); ?></h4>
                                <p><?php echo e($package->description ?? __('No description embedded.')); ?></p>
                                <h4 class="text-primary"><?php echo e(PriceHelper::idr($package->price, 0, true)); ?></h4>
                            </div>
                            <div class="store-overlay">
                                <a href="<?php echo e(route('reservation')); ?>" class="btn btn-primary rounded-pill py-2 px-4 m-2">
                                    <?php echo e(__('Book Now')); ?>

                                    <i class="fa fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    

    
    <div class="container-fluid testimonial py-5 my-5" id="testimonial">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-white"><?php echo e(__('Testimonial')); ?></p>
                <h1 class="display-6"><?php echo e(__('What our clients say about our services')); ?></h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">
                        Moon Light benar-benar bikin malam kami terasa istimewa. Suasananya tenang, pencahayaan temaramnya romantis, dan hidangannya luar biasa. Rasanya seperti makan malam di film!
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="<?php echo e(asset('frontend-assets/img/testimonial-1.jpg')); ?>"
                            alt="">
                        <div class="text-start ms-3">
                            <h5>Cikal & Jesindi</h5>
                            <span class="text-primary">Couple</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">
                        Kami sekeluarga jarang bisa kumpul, tapi makan di Family Feast Table jadi momen yang spesial. Meja luas, porsinya besar untuk dibagi, dan suasananya hangat banget. Anak-anak pun senang!
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="<?php echo e(asset('frontend-assets/img/testimonial-2.jpg')); ?>"
                            alt="">
                        <div class="text-start ms-3">
                            <h5> Keluarga Damanik</h5>
                            <span class="text-primary">Keluarga</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">
                        Grand Table adalah pilihan sempurna untuk pesta ulang tahun sahabat kami. Dekornya elegan, semua tamu bisa duduk nyaman, dan makanannya benar-benar membuat acara terasa mewah
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="<?php echo e(asset('frontend-assets/img/testimonial-3.jpg')); ?>"
                            alt="">
                        <div class="text-start ms-3">
                            <h5>Usman</h5>
                            <span class="text-primary">Trader</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <div class="container-xxl contact py-5" id="contact-us">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary"><?php echo e(__('Contact Us')); ?></p>
                <h1 class="display-6"><?php echo e(__('Contact us right now')); ?></h1>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-8">
                    <p class="text-center mb-5">
                        <?php echo e(__("Don't hesitate to contact us. We are ready to serve you.")); ?>

                    </p>
                    <div class="row g-5">
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-envelope fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">
                                <a href="mailto:reservasi@eloria.id">reservasi@eloria.id</a>
                            </p>
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-phone fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">
                                <a href="tel:0881224544451">
                                    +62 81224544451
                                </a>
                            </p>
                            <p class="mb-0">
                                <a href="tel:081370970921">
                                    +62 813 7097 0921
                                </a>
                            </p>
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">Eloria Resto & Lounge
                                            Jl. Ir. H. Juanda No. 123, Dago Atas, Bandung, Jawa Barat 40135
                            </p>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS\atv-ticket-reservation\resources\views/frontend/pages/home/index.blade.php ENDPATH**/ ?>