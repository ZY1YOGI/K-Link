<header>
    <nav>
        <div class="logo">
            <img src="<?php echo e(asset('favicon.jpg')); ?>" />
            <h1><?php echo e(explode(' ', Auth::user()->name)[0]); ?></h1>
            <div class="auth"></div>
        </div>
        <ul class="nav-links">
            <li class="nav-link" id="home_link"><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li class="nav-link" id="profile_link"><a href="<?php echo e(route('profile')); ?>">Profile</a></li>
            <li class="nav-link" id="logout" type="button"><a href="#">Logout</a></li>
            <li class="nav-link" id="switch-mode">Dark</li>
            <form method="POST" action="<?php echo e(route('logout')); ?>" id="logout-form"><?php echo csrf_field(); ?></form>
        </ul>
    </nav>
</header>
<?php /**PATH /home/youssef/Desktop/K-Link/resources/views/layouts/header.blade.php ENDPATH**/ ?>