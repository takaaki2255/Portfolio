<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="titles text-left h1 col-md-10 mx-auto">RECLPE</div>
        
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date" style="color:black">
                                    <?php echo e($post->updated_at->format('Y年m月d日')); ?>

                                </div>
                                <div class="title">
                                    <?php echo e(Str::limit($post->dish_name, 80)); ?>

                                </div>
                                <div class="body mt-3">
                                    <?php echo e(Str::limit($post->material, 1000)); ?>

                                </div>
                                <div class="body mt-3">
                                    <?php echo e(Str::limit($post->recipe, 1500)); ?>

                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                <?php if($post->image_path): ?>
                                    <img src="<?php echo e(secure_asset('storage/image/' . $post->image_path)); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/portfolio/index.blade.php ENDPATH**/ ?>