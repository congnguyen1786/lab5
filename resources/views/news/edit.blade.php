@extends('layout')
@section('title', 'Cập nhật tin tức')
@section('content')
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
                    <form action="{{ url('/tin/cap-nhat/' . $news->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="tieu_de" class="form-label fw-semibold">
                                <i class="fas fa-heading me-2"></i> Tiêu đề
                            </label>
                            <input type="text" 
                                   class="form-control @error('tieu_de') is-invalid @enderror" 
                                   id="tieu_de" 
                                   name="tieu_de" 
                                   value="{{ old('tieu_de', $news->tieu_de) }}" 
                                   placeholder="Nhập tiêu đề tin tức">
                            @error('tieu_de')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="mo_ta" class="form-label fw-semibold">
                                <i class="fas fa-align-left me-2"></i> Mô tả ngắn
                            </label>
                            <textarea class="form-control @error('mo_ta') is-invalid @enderror" 
                                      id="mo_ta" 
                                      name="mo_ta" 
                                      rows="4" 
                                      placeholder="Nhập mô tả">{{ old('mo_ta', $news->mo_ta) }}</textarea>
                            @error('mo_ta')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="hinh_anh" class="form-label fw-semibold">
                                <i class="fas fa-image me-2"></i> URL Hình ảnh
                            </label>
                            <input type="text" 
                                   class="form-control @error('hinh_anh') is-invalid @enderror" 
                                   id="hinh_anh" 
                                   name="hinh_anh" 
                                   value="{{ old('hinh_anh', $news->hinh_anh) }}" 
                                   placeholder="Nhập URL hình ảnh">
                            @error('hinh_anh')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category_id" class="form-label fw-semibold">
                                <i class="fas fa-list me-2"></i> Chọn loại tin
                            </label>
                            <select class="form-select @error('category_id') is-invalid @enderror" 
                                    id="category_id" 
                                    name="category_id">
                                <option value="">Chọn loại tin</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $news->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->ten_loai }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="luot_xem" class="form-label fw-semibold">
                                <i class="fas fa-eye me-2"></i> Lượt xem
                            </label>
                            <input type="number" 
                                   class="form-control @error('luot_xem') is-invalid @enderror" 
                                   id="luot_xem" 
                                   name="luot_xem" 
                                   value="{{ old('luot_xem', $news->luot_xem) }}" 
                                   min="0">
                            @error('luot_xem')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                                       {{ old('an_hien', $news->an_hien) == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="hien">Hiện</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" 
                                       type="radio" 
                                       name="an_hien" 
                                       id="an" 
                                       value="1" 
                                       {{ old('an_hien', $news->an_hien) == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="an">Ẩn</label>
                            </div>
                            @error('an_hien')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                                       {{ old('noi_bat', $news->noi_bat) ? 'checked' : '' }}>
                                <label class="form-check-label" for="noi_bat">Đánh dấu tin nổi bật</label>
                            </div>
                            @error('noi_bat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ url('/') }}" class="btn btn-outline-secondary me-2">
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
@endsection
