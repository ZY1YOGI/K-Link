<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <meta name="author" content="Youssef Amjad, Yousef Mo Gaber, Mohamed Elsayad" />
        
        <meta name="keywords" content="school,schools,K-Link,schools-K-Link,alkamal,kamal,Technology school" />
        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        
        <title><?php echo $__env->yieldContent('title'); ?></title>
        
        <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
        
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/swiper.js'); ?>
        
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
        <?php echo $__env->yieldContent('scripts'); ?>
    </head>
    <body>
        <!-- Start Splash -->
        <div class="splash" id="splash">
            <div class="splash-ring"></div>
            <span class="text-splash">loading...</span>
        </div>
        <!-- End Splash -->

        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
<?php /**PATH /home/youssef/Desktop/K-Link/resources/views/layouts/app.blade.php ENDPATH**/ ?>