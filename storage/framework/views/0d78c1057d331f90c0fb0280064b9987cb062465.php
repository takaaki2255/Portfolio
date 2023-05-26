<?php $__env->startSection('title', 'プロフィール新規作成'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール作成</h2>
                <form action="<?php echo e(route('admin.profile.create')); ?>" method="post" enctype="multipart/form-data">

                    <?php if(count($errors) > 0): ?>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($e); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">年齢</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="age" value="<?php echo e(old('age')); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">スキル</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="skill" rows="15"><?php echo e(old('skill')); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">経歴</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="career" rows="20"><?php echo e(old('career')); ?></textarea>
                        </div>
                    </div>
                    <?php echo csrf_field(); ?>
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/admin/profile/create.blade.php ENDPATH**/ ?>