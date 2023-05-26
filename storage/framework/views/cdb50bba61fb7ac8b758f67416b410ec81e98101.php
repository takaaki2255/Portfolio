<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <!--windowsの基本ブラウザであるedgeに対応するという記載。-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--画面幅を小さくしたとき、文字や画像の大きさを調整してくれる。-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        
        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Scripts -->
         
        <script src="<?php echo e(secure_asset('js/app.js')); ?>" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600"
                    rel="stylesheet" type="text/css">

        <!-- Styles -->
        
        <link href="<?php echo e(secure_asset('css/app.css')); ?>" rel="stylesheet">
        
        <link href="<?php echo e(secure_asset('css/front.css')); ?>" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <!--.envのAppNameを変える-->
                    <a class="navbar-brand" style="font-size:250%;" 
                                            href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'C00KMEMOS')); ?>

                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/portfolio')); ?>">
                         <?php echo e(config('app.twoname', 'RECIPE')); ?>

                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/profile')); ?>">
                         <?php echo e(config('app.thirdname', 'PROFILE')); ?>

                    </a>
                    <button class="navbar-toggler" type="button" 
                    data-toggle="collapse" data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" 
                    aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" 
                        id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav">
                            
                            
                        <!-- Authentication Links -->
                        
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('messages.login')); ?></a></li>
                        
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                 </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('messages.logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                            <?php endif; ?>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            

            <main class="py-4">
                
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </body>
</html><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/layouts/front.blade.php ENDPATH**/ ?>