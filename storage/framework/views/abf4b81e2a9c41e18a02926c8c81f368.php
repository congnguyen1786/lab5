
<?php $__env->startSection('title', 'Chi tiết tin tức'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white text-center py-3">
            <h2 class="mb-0">Chi tiết Tin Tức</h2>
        </div>
        <div class="card-body p-4">
            <h3 class="text-primary"><?php echo e($news->tieu_de); ?></h3>
            <p class="text-muted"><strong>Mô tả:</strong> <?php echo e($news->mo_ta); ?></p>
            
            <div class="mb-3">
                <strong>Loại tin:</strong> 
                <span class="badge bg-secondary"><?php echo e($news->category->ten_loai ?? 'Chưa có loại'); ?></span>
            </div>
            
            <div class="mb-3">
                <strong>Hình ảnh:</strong><br>
                <?php if($news->hinh_anh): ?>
                    <img src="<?php echo e($news->hinh_anh); ?>" alt="Hình ảnh tin tức" class="img-fluid rounded shadow-sm" style="max-width: 300px;">
                <?php else: ?>
                    <p class="text-muted">Không có hình ảnh</p>
                <?php endif; ?>
            </div>
            
            <p><strong>Lượt xem:</strong> <span class="badge bg-dark"><?php echo e($news->luot_xem); ?></span></p>
            
            <p><strong>Trạng thái:</strong> 
                <span class="badge <?php echo e($news->an_hien ? 'bg-danger' : 'bg-success'); ?>">
                    <?php echo e($news->an_hien ? 'Ẩn' : 'Hiện'); ?>

                </span>
            </p>
            
            <p><strong>Nổi bật:</strong> 
                <span class="badge <?php echo e($news->noi_bat ? 'bg-warning' : 'bg-secondary'); ?>">
                    <?php echo e($news->noi_bat ? 'Có' : 'Không'); ?>

                </span>
            </p>
            
            <div class="row text-muted">
                <div class="col-md-6"><strong>Ngày tạo:</strong> <?php echo e($news->created_at); ?></div>
                <div class="col-md-6 text-md-end"><strong>Ngày cập nhật:</strong> <?php echo e($news->updated_at); ?></div>
            </div>
            
            <div class="d-flex justify-content-end mt-4">
                <a href="<?php echo e(url('/')); ?>" class="btn btn-outline-secondary">Quay lại</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\php31\bailab\Lab5\La5\resources\views/news/show.blade.php ENDPATH**/ ?>