<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hearing Aids Price Guide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <div class="brand-block">
            <h1 class="site-title">Hearing Aids Price Guide</h1>
            <p class="site-subtitle">Compare types, prices and suitability ratings</p>
        </div>

        <nav class="main-nav" aria-label="Primary navigation">
            <a href="<?php echo e(route('hearing-aids.index')); ?>">Home</a>

            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>

                <?php if(auth()->user()->is_admin): ?>
                    <a href="<?php echo e(route('admin.brands.index')); ?>">Manage Brands</a>
                    <a href="<?php echo e(route('hearing-aids.create')); ?>">Add Hearing Aid</a>
                <?php endif; ?>

                <form action="<?php echo e(route('logout')); ?>" method="POST" class="inline-form">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="nav-button">Logout</button>
                </form>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>
                <a href="<?php echo e(route('register')); ?>">Register</a>
            <?php endif; ?>
        </nav>
    </div>
</header>

<main class="container">
    <?php if(session('success')): ?>
        <div class="alert success" role="status">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert error" role="alert">
            <strong>Please fix the following:</strong>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($err); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php echo e($slot); ?>

</main>

<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo e(date('Y')); ?> Hearing Aids Price Guide.</p>
    </div>
</footer>
</body>
</html>
<?php /**PATH D:\fatmah friend\hearing-aids-app\resources\views/components/layout.blade.php ENDPATH**/ ?>