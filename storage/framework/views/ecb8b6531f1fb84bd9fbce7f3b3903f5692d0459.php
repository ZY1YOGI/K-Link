<?php $__env->startSection('title', 'Welcome'); ?>
<?php $__env->startSection('content'); ?>
    <header>
        <div class="icon">
            <a href="<?php echo e(route('auth')); ?>"><i id="sign" class="fa-solid fa-user-plus"></i></a>
            <i id="menu" class="fa-solid fa-bars"></i>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="#" target="_blank">About Us</a></li>
                <li><a href="#" target="_blank">Twitter</a></li>
                <li><a href="https://www.facebook.com/K.Trend.Link.School" target="_blank">Facebook</a></li>
                <li><a href="#events">Events</a></li>
                <li class="active"><a href="#">Home</a></li>
            </ul>
        </nav>
        <div class="logo">
            <a href=""> <?php echo e(env('APP_NAME')); ?> <i class="fa-solid fa-graduation-cap"></i></a>
        </div>
    </header>
    <!-- HOME START -->
    <section class="home" id="home">
        <div class="content">
            <h3>الكمال ترند لينك </h3>
            <p>كل ما يحتاجه طلابنا وأكثر</p>
            <a href="<?php echo e(route('auth')); ?>" class="btn">سجل الأن</a>
        </div>
    </section>
    <!-- HOME END -->

    <!-- START -->
    <section class="section2">
        <div class="sect-head">
            <h3> ما نقدم</h3>

        </div>
        <div class="container" id="events">
            <div class="box">
                <div class="img">
                    <img src="<?php echo e(Vite::asset('resources/img/bg_logo.jpg')); ?>" alt="">
                </div>
                <div class="text">
                    <a href="#"><span>اسم لها تاريخ | K-Link</span></a>
                    <p>مدارس الكمال ترند لينك اكثر من 20 سنة في مجال التربية و التعليم</p>
                    <a href="#" class="btn">المزيد</a>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img class="img_hr" src="<?php echo e(Vite::asset('resources/img/bg_hr_2.jpg')); ?>" alt="">
                </div>
                <div class="text">
                    <a href="#"><span>الأخبار و الايفنتات</span></a>
                    <p>نقدم لدينا في هذا القسم اهم الاخبار واحدث الايفنتات لجميع الفرق داخل الاكاديمية</p>
                    <a href="#" class="btn">المزيد</a>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="<?php echo e(Vite::asset('resources/img/gdawl.jpg')); ?>" alt="">
                </div>
                <div class="text">
                    <a href=""> <span>مواعيد المحاضرات</span></a>
                    <p>نقدم لدينا في هذا القسم مواعيد المحاضرات لجميع الاقسام داخل الاكاديمية</p>
                    <a href="#" class="btn">المزيد</a>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="https://images.squarespace-cdn.com/content/v1/5269fbd3e4b0eb2b76ccc1db/52ddf8f7-c47f-440f-bac1-7fb4923f13c9/class-rank_REV.jpg"
                        alt="">
                </div>
                <div class="text">
                    <a href="#"><span>اكتشف درجاتك</span></a>
                    <p> اكتشف درجاتك بستحدام الكود الخاص بك</p>
                    <a href="#" class="btn">المزيد</a>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="<?php echo e(Vite::asset('resources/img/gathered.jpg')); ?>" alt="">
                </div>
                <div class="text">
                    <a href="#"><span>نهتم دائما بمظهر ابنائنا المتميزين</span></a>
                    <p>نهتم بسلوك و مظهر ابنائنا المتفوقين لجل مظهر افضل لمصر العظيمه</p>
                    <a href="#" class="btn">المزيد</a>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="<?php echo e(Vite::asset('resources/img/distribution_of_certificates.jpg')); ?>" alt="">
                </div>
                <div class="text">
                    <a href="#"><span>دائما في تقدم مع ابنائنا</span></a>
                    <p>يتم توزيع الجوائز دائمًا على ابنائنا المتميزين المتفوقين</p>
                    <a href="#" class="btn">المزيد</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4 -->
    <section class="section4">
        <div class="content">
            <h3>مهمتنا الأولي و الوحيدة</h3>
            <p>هي توسيع قاعدة المعرفة الخاصة بك</p>
            <a href="<?php echo e(route('auth')); ?>" class="btn">سجل الأن</a>
        </div>
    </section>
    <section class="sec-team">
        <div class="sect-head">
            <h3> الفريق</h3>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img class="card-img" src="<?php echo e(Vite::asset('resources/img/Youssef.jpg')); ?>"
                                    alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Youssef Amjad</h2>
                            <p class="description">Full Stack Web developer</p>
                            <div class="links">
                                <a href="https://www.facebook.com/ZY1YOGi" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://twitter.com/YoussefAmjad6" target="_blank"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/zy1yogi" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img class="card-img" src="<?php echo e(Vite::asset('resources/img/Mohamed.jpg')); ?>" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Mohamed</h2>
                            <p class="description">Front End developer</p>
                            <div class="links">
                                <a href="https://www.facebook.com/profile.php?id=100019727234673" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/medosayad56" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img class="card-img" src="<?php echo e(Vite::asset('resources/img/YoussefMo.jpg')); ?>" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Youssef</h2>
                            <p class="description">DevOps developer</p>
                            <div class="links">
                                <a href="https://www.facebook.com/profile.php?id=100035824070507" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/yoseef_mo_gaber" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
        </div>
    </section>

    <footer>
        <h1>جميع الحقوق محفوظه لي مدارس الكمال ترند لينك &copy; <?php echo e(now()->year); ?> | 2019</h1>
    </footer>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/Welcome/Welcome.js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/youssef/Desktop/K-Link/resources/views/welcome.blade.php ENDPATH**/ ?>