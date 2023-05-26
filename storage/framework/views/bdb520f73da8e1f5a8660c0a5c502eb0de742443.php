<?php $__env->startSection('title', '登録済みのプロフィール一覧'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <h2>Myプロフィール</h2></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo e(route('admin.profile.add')); ?>" role="button" 
                class="btn btn-primary">新規作成</a>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">名前</th>
                                <th width="10%">年齢</th>
                                <th width="20%">スキル</th>
                                <th width="40%">経歴</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                  <th><?php echo e($profile->id); ?></th>
                                  <td><?php echo e(Str::limit($profile->name, 20)); ?></td>
                                  <td><?php echo e(Str::limit($profile->age, 5)); ?></td>
                                  <td><?php echo e(Str::limit($profile->skill, 100)); ?></td>
                                  <td><?php echo e(Str::limit($profile->career, 150)); ?></td>
                                  <td>
                                      <div>
                                        <a href="<?php echo e(route('admin.profile.edit', ['id' => $profile->id])); ?>">編集</a>
                                      </div>
                                      <div>
                                            <a href="<?php echo e(route('admin.profile.delete', ['id' => $profile->id])); ?>">削除</a>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/admin/profile/indexs.blade.php ENDPATH**/ ?>