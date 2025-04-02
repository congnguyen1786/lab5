
<?php $__env->startSection('title', 'Thêm tin tức'); ?>
<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0 fw-bold"><i class="fas fa-newspaper me-2"></i> Thêm Tin Tức Mới</h3>
                </div>
                <div class="card-body px-4 py-4">
                    <form action="<?php echo e(url('/tin/them')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="tieu_de" class="form-label fw-bold">Tiêu Đề</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['tieu_de'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tieu_de" name="tieu_de" value="<?php echo e(old('tieu_de')); ?>" placeholder="Nhập tiêu đề">
                            <?php $__errorArgs = ['tieu_de'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label for="mo_ta" class="form-label fw-bold">Mô Tả</label>
                            <textarea class="form-control <?php $__errorArgs = ['mo_ta'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="mo_ta" name="mo_ta" rows="3" placeholder="Nhập mô tả tin tức"><?php echo e(old('mo_ta')); ?></textarea>
                            <?php $__errorArgs = ['mo_ta'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label for="hinh_anh" class="form-label fw-bold">Hình Ảnh</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['hinh_anh'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="hinh_anh" name="hinh_anh" value="<?php echo e(old('hinh_anh')); ?>" placeholder="URL hình ảnh">
                            <?php $__errorArgs = ['hinh_anh'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label for="category_id" class="form-label fw-bold">Loại Tin</label>
                            <select class="form-select" id="category_id" name="category_id">
                                <option value="">-- Chọn loại tin --</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>>
                                        <?php echo e($category->ten_loai); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Trạng Thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="an_hien" id="hien" value="0" checked>
                                <label class="form-check-label" for="hien">Hiện</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="an_hien" id="an" value="1">
                                <label class="form-check-label" for="an">Ẩn</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Tin Nổi Bật</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="noi_bat" id="noi_bat" value="1">
                                <label class="form-check-label" for="noi_bat">Đánh dấu là tin nổi bật</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="<?php echo e(url('/')); ?>" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Quay Lại
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Lưu Tin
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\php31\bailab\Lab5\La5\resources\views/news/create.blade.php ENDPATH**/ ?>