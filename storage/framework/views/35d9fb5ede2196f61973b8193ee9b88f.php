
<?php $__env->startSection('title', 'Cập nhật tin tức'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-info text-white">
                    <h4 class="d-flex align-items-center mb-0">
                        <i class="fas fa-pencil-alt me-2"></i> Cập nhật tin tức
                    </h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('/tin/cap-nhat/' . $news->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="mb-3">
                            <label for="tieu_de" class="form-label fw-semibold">
                                <i class="fas fa-heading me-2"></i> Tiêu đề
                            </label>
                            <input type="text" 
                                   class="form-control <?php $__errorArgs = ['tieu_de'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   id="tieu_de" 
                                   name="tieu_de" 
                                   value="<?php echo e(old('tieu_de', $news->tieu_de)); ?>" 
                                   placeholder="Nhập tiêu đề tin tức">
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
                            <label for="mo_ta" class="form-label fw-semibold">
                                <i class="fas fa-align-left me-2"></i> Mô tả ngắn
                            </label>
                            <textarea class="form-control <?php $__errorArgs = ['mo_ta'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                      id="mo_ta" 
                                      name="mo_ta" 
                                      rows="4" 
                                      placeholder="Nhập mô tả"><?php echo e(old('mo_ta', $news->mo_ta)); ?></textarea>
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
                            <label for="hinh_anh" class="form-label fw-semibold">
                                <i class="fas fa-image me-2"></i> URL Hình ảnh
                            </label>
                            <input type="text" 
                                   class="form-control <?php $__errorArgs = ['hinh_anh'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   id="hinh_anh" 
                                   name="hinh_anh" 
                                   value="<?php echo e(old('hinh_anh', $news->hinh_anh)); ?>" 
                                   placeholder="Nhập URL hình ảnh">
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
                            <label for="category_id" class="form-label fw-semibold">
                                <i class="fas fa-list me-2"></i> Chọn loại tin
                            </label>
                            <select class="form-select <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    id="category_id" 
                                    name="category_id">
                                <option value="">Chọn loại tin</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id', $news->category_id) == $category->id ? 'selected' : ''); ?>>
                                        <?php echo e($category->ten_loai); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['category_id'];
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
                            <label for="luot_xem" class="form-label fw-semibold">
                                <i class="fas fa-eye me-2"></i> Lượt xem
                            </label>
                            <input type="number" 
                                   class="form-control <?php $__errorArgs = ['luot_xem'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   id="luot_xem" 
                                   name="luot_xem" 
                                   value="<?php echo e(old('luot_xem', $news->luot_xem)); ?>" 
                                   min="0">
                            <?php $__errorArgs = ['luot_xem'];
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
                            <label class="form-label fw-semibold">
                                <i class="fas fa-eye-slash me-2"></i> Trạng thái
                            </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" 
                                       type="radio" 
                                       name="an_hien" 
                                       id="hien" 
                                       value="0" 
                                       <?php echo e(old('an_hien', $news->an_hien) == 0 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="hien">Hiện</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" 
                                       type="radio" 
                                       name="an_hien" 
                                       id="an" 
                                       value="1" 
                                       <?php echo e(old('an_hien', $news->an_hien) == 1 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="an">Ẩn</label>
                            </div>
                            <?php $__errorArgs = ['an_hien'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-star me-2"></i> Tin nổi bật
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" 
                                       type="checkbox" 
                                       name="noi_bat" 
                                       id="noi_bat" 
                                       value="1" 
                                       <?php echo e(old('noi_bat', $news->noi_bat) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="noi_bat">Đánh dấu tin nổi bật</label>
                            </div>
                            <?php $__errorArgs = ['noi_bat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="<?php echo e(url('/')); ?>" class="btn btn-outline-secondary me-2">
                                <i class="fas fa-arrow-left me-1"></i> Hủy bỏ
                            </a>
                            <button type="submit" class="btn btn-info">
                                <i class="fas fa-save me-1"></i> Cập nhật tin
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

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\php31\bailab\Lab5\La5\resources\views/news/edit.blade.php ENDPATH**/ ?>