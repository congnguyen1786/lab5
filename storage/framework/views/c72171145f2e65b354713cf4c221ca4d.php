
<?php $__env->startSection('title', 'Danh sách tin tức'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">DANH SÁCH TIN</h1>
        <a href="<?php echo e(url('/tin/them')); ?>" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Thêm tin mới
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row mb-3 p-3 bg-light rounded shadow-sm">
        <div class="left col-md-8">
            <h4><?php echo e($tin->tieu_de); ?></h4>
            <p><?php echo e($tin->mo_ta); ?></p>
            <p><strong>Loại tin:</strong> <?php echo e($tin->category->ten_loai ?? 'Chưa có loại'); ?></p>
        </div>
        <div class="right col-md-4 d-flex justify-content-end align-items-center">
            <a href="<?php echo e(url('/tin/chi-tiet/' . $tin->id)); ?>" class="btn btn-sm btn-info me-2">
                <i class="fas fa-eye"></i> Chi tiết
            </a>
            <a href="<?php echo e(url('/tin/sua/' . $tin->id)); ?>" class="btn btn-sm btn-warning me-2">
                <i class="fas fa-edit"></i> Sửa
            </a>
            <form action="<?php echo e(url('/tin/xoa/' . $tin->id)); ?>" method="POST" class="d-inline"
                  onsubmit="return confirm('Bạn có chắc muốn xóa tin này?');">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i> Xóa
                </button>
            </form>
        </div>
    </div>
    <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP3\Lab\Lab_5_PA00243\resources\views/news/index.blade.php ENDPATH**/ ?>