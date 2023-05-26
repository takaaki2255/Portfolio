<?php $__env->startSection('title', 'プロフィール編集'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール編集</h2>
                <form action="<?php echo e(route('admin.profile.update')); ?>" method="post" enctype="multipart/form-data">
                    <?php if(count($errors) > 0): ?>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($e); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="<?php echo e($profile_form->name); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">年齢</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="age" value="<?php echo e($profile_form->age); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">スキル</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="skill" rows="15"><?php echo e($profile_form->skill); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">経歴</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="career" rows="20"><?php echo e($profile_form->career); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="<?php echo e($profile_form->id); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/admin/profile/edit.blade.php ENDPATH**/ ?>