<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Danh Mục</th>
            <th>Giá Gốc</th>
            <th>Giá Khuyến Mãi</th>
            <th>Active</th>
            <th>Update</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->menu->name); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->price_sale); ?></td>
                <td><?php echo \App\Helpers\Helper::active($product->active); ?></td>
                <td><?php echo e($product->updated_at); ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/products/edit/<?php echo e($product->id); ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow(<?php echo e($product->id); ?>, '/admin/products/destroy')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="card-footer clearfix">
        <?php echo $products->links(); ?>

    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lap-trinh-laravel-khoa-pham-2022-master\Source\resources\views/admin/product/list.blade.php ENDPATH**/ ?>