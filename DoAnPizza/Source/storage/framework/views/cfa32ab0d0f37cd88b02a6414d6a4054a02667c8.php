<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Name</th>
                <th>Active</th>
                <th>Update</th>
                <th style="width: 100px">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php echo \App\Helpers\Helper::menu($menus); ?>

        </tbody>
    </table>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lap-trinh-laravel-khoa-pham-2022-master\Source\resources\views/admin/menu/list.blade.php ENDPATH**/ ?>