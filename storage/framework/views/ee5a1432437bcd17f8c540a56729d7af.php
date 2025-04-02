
<?php $__env->startSection('title', 'Danh sách tin tức'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold">Danh Sách Tin Tức</h2>
        <a href="<?php echo e(url('/tin/them')); ?>" class="btn btn-success">
            <i class="fas fa-plus me-2"></i> Thêm Tin Mới
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-3 shadow-sm border-0">
        <div class="card-body">
            <h4 class="card-title text-dark fw-bold"><?php echo e($tin->tieu_de); ?></h4>
            <p class="card-text text-muted"><?php echo e($tin->mo_ta); ?></p>
            <p class="mb-2"><strong>Loại tin:</strong> <span class="badge bg-secondary"><?php echo e($tin->category->ten_loai ?? 'Chưa có loại'); ?></span></p>
            <div class="d-flex justify-content-end gap-2">
                <a href="<?php echo e(url('/tin/chi-tiet/' . $tin->id)); ?>" class="btn btn-outline-info btn-sm">
                    <i class="fas fa-eye"></i> Xem
                </a>
                <a href="<?php echo e(url('/tin/sua/' . $tin->id)); ?>" class="btn btn-outline-warning btn-sm">
                    <i class="fas fa-edit"></i> Sửa
                </a>
                <form action="<?php echo e(url('/tin/xoa/' . $tin->id)); ?>" method="POST" class="d-inline"
                      onsubmit="return confirm('Bạn có chắc muốn xóa tin này?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-trash"></i> Xóa
                    </button>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\php31\bailab\Lab5\La5\resources\views/news/index.blade.php ENDPATH**/ ?>