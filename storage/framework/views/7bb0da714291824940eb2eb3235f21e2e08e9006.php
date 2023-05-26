<?php $__env->startSection('title', '新規作成'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>レシピ新規投稿</h2>
                <form action="<?php echo e(route('admin.portfolio.create')); ?>" method="post" enctype="multipart/form-data">

                    <?php if(count($errors) > 0): ?>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($e); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label class="col-md-2">料理名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="dish_name" value="<?php echo e(old('dish_name')); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">材料</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="material" rows="10"><?php echo e(old('material')); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">レシピ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="recipe" rows="20"><?php echo e(old('recipe')); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <?php echo csrf_field(); ?>
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/admin/portfolio/create.blade.php ENDPATH**/ ?>