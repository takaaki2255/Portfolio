<?php $__env->startSection('content'); ?>
<div class="top">
     <div class="top-brand">
          <h2 class="top-title" style="font-size:1000%;">
               <?php echo e(config('app.name', 'C00KMEMOS')); ?>

          </h2>
          <a class="button" style="font-size:300%;" href="<?php echo e(url('/portfolio')); ?>">
               <?php echo e(config('app.twoname', 'RECIPE')); ?>

          </a>
          <a class="button" style="font-size:300%;" href="<?php echo e(url('/profile')); ?>">
               <?php echo e(config('app.thirdname', 'PROFILE')); ?>

          </a>
     </div>
</div>
<footer>
</footer>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/welcome/index.blade.php ENDPATH**/ ?>