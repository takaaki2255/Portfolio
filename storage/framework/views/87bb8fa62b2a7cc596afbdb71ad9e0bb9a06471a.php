<?php $__env->startSection('title', '投稿レシピ一覧'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <h2>投稿レシピ一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo e(route('admin.portfolio.add')); ?>" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="<?php echo e(route('admin.portfolio.index')); ?>" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">料理名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="dish_name" value="<?php echo e($dish_name); ?>">
                        </div>
                        <div class="col-md-2">
                            <?php echo csrf_field(); ?>
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">料理名</th></th>
                                <th width="20%">材料</th>
                                <th width="30%">レシピ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($portfolio->id); ?></th>
                                    <td><?php echo e(Str::limit($portfolio->dish_name, 50)); ?></td>
                                    <td><?php echo e(Str::limit($portfolio->material, 100)); ?></td>
                                    <td><?php echo e(Str::limit($portfolio->recipe, 250)); ?></td>
                                    <td>
                                        <div>
                                            <a href="<?php echo e(route('admin.portfolio.edit', ['id' => $portfolio->id])); ?>">編集</a>
                                        </div>
                                        <div>
                                            <a href="<?php echo e(route('admin.portfolio.delete', ['id' => $portfolio->id])); ?>">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/admin/portfolio/index.blade.php ENDPATH**/ ?>