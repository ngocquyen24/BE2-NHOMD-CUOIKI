<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Ngày Đặt hàng</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($customer->id); ?></td>
                <td><?php echo e($customer->name); ?></td>
                <td><?php echo e($customer->phone); ?></td>
                <td><?php echo e($customer->email); ?></td>
                <td><?php echo e($customer->created_at); ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/customers/view/<?php echo e($customer->id); ?>">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow(<?php echo e($customer->id); ?>, '/admin/customers/destroy')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="card-footer clearfix">
        <?php echo $customers->links(); ?>

    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lap-trinh-laravel-khoa-pham-2022-master\Source\resources\views/admin/carts/customer.blade.php ENDPATH**/ ?>