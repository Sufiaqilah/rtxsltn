<nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'RotexSolution')); ?>

        </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <?php if(auth()->guard()->guest()): ?>
                        <?php else: ?>
                            <?php if(Auth::user()->role == "admin"): ?>
                                <li class="nav-item">
                                    <a href="/admins" class="nav-link">Admin Panel</a>
                                </li>

                                <?php else: ?>
                                    <li class="nav-item">
                                        <a href="/dashboard" class="nav-link">Dashboard</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="<?php echo e(route('roadtax.show', Auth::user()->ic)); ?>" class="nav-link">Renew Roadtax</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/payment" class="nav-link">Payments</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/delivery" class="nav-link">Delivery</a>
                                    </li>
                            <?php endif; ?>
                    <?php endif; ?>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>

                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php else: ?>
                            <?php if(Auth::user()->role == "admin"): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                </li>

                                <?php else: ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('profiles.show', Auth::user()->ic)); ?>">
                                            <span><?php echo e(Auth::user()->username); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Logout')); ?>

                                            </a>

                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                    </li>
                            <?php endif; ?>

                    <?php endif; ?>
                </ul>
            </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\rxsltn\resources\views/inc/navbar.blade.php ENDPATH**/ ?>