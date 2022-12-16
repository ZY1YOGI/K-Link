<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
    <!-- Start Header -->
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Header -->

    <!--START HOME -->
    <div id="main">
        <h1><?php echo e(Auth::user()->name); ?> اهلا</h1>
        <div class="container">

            <div class="box">
                <div class="img">
                    <img src="<?php echo e(Vite::asset('resources/img/student_statistics.png')); ?>" alt="student statistics">
                </div>
                <div class="text">
                    <a href=""> <span>اكتشف درجاتك لهاذا الشهر</span></a>
                    <p>اعرف درجاتك في الامتحانات الشهريه عن طريق الكود الخاص بك</p>
                    <a href="#" class="btn">اكتشف</a>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="https://www.wikihow.com/images_en/thumb/9/9b/Become-a-College-Professor-Step-32.jpg/v4-460px-Become-a-College-Professor-Step-32.jpg.webp"
                        alt="">
                </div>
                <div class="text">
                    <a href=""> <span>اعرف سلوكك مع المعلم</span></a>
                    <p>اكتشف تقيم المعلم الخاص بك و حاول التقدم بنفسك من خلال النصائح التي تقدم لك</p>
                    <a href="#" class="btn">اعرف</a>
                </div>
            </div>

            

        </div>
    </div>
    <!-- END HOME -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/Home/Home.js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/youssef/Desktop/K-Link/resources/views/home.blade.php ENDPATH**/ ?>