<?php $__env->startSection('content'); ?>
    <div class="container ">
        <div class="titles text-left h1 col-md-10 mx-auto">PROFILE</div>
        <hr color="#c0c0c0">
        <div class="main col-md-10 mx-auto">
            <div class="common">
                <div　class=text-left>氏名</div>
                <div class="primary h2">
                    <?php echo e($profile->name); ?>

                </div>
                <div>年齢</div>
                <div class="primary h2">
                    <?php echo e($profile->age); ?>

                </div>
                <div class="">スキル</div>
                <p class="secondary h5"><?php echo e($profile->skill); ?></p>
                <div class="">経歴</div>
                <p class="secondary h5"><?php echo e($profile->career); ?></p>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/profile/index.blade.php ENDPATH**/ ?>