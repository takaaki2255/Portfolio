<?php $__env->startSection('title', 'レシピ編集'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>レシピ編集</h2>
                <form action="<?php echo e(route('admin.portfolio.update')); ?>" method="post" enctype="multipart/form-data">
                    <?php if(count($errors) > 0): ?>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($e); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label class="col-md-2" for="">料理名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="dish_name" value="<?php echo e($portfolio_form->dish_name); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">材料</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="material" rows="10"><?php echo e($portfolio_form->material); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">レシピ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="recipe" rows="20"><?php echo e($portfolio_form->recipe); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: <?php echo e($portfolio_form->image_path); ?>

                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="<?php echo e($portfolio_form->id); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            <?php if($portfolio_form->histories != NULL): ?>
                                <?php $__currentLoopData = $portfolio_form->histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item"><?php echo e($history->edited_at); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/admin/portfolio/edit.blade.php ENDPATH**/ ?>