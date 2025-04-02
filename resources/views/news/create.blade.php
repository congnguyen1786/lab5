@extends('layout')
@section('title', 'Thêm tin tức')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0 fw-bold"><i class="fas fa-newspaper me-2"></i> Thêm Tin Tức Mới</h3>
                </div>
                <div class="card-body px-4 py-4">
                    <form action="{{ url('/tin/them') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tieu_de" class="form-label fw-bold">Tiêu Đề</label>
                            <input type="text" class="form-control @error('tieu_de') is-invalid @enderror" id="tieu_de" name="tieu_de" value="{{ old('tieu_de') }}" placeholder="Nhập tiêu đề">
                            @error('tieu_de')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="mo_ta" class="form-label fw-bold">Mô Tả</label>
                            <textarea class="form-control @error('mo_ta') is-invalid @enderror" id="mo_ta" name="mo_ta" rows="3" placeholder="Nhập mô tả tin tức">{{ old('mo_ta') }}</textarea>
                            @error('mo_ta')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="hinh_anh" class="form-label fw-bold">Hình Ảnh</label>
                            <input type="text" class="form-control @error('hinh_anh') is-invalid @enderror" id="hinh_anh" name="hinh_anh" value="{{ old('hinh_anh') }}" placeholder="URL hình ảnh">
                            @error('hinh_anh')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category_id" class="form-label fw-bold">Loại Tin</label>
                            <select class="form-select" id="category_id" name="category_id">
                                <option value="">-- Chọn loại tin --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->ten_loai }}
                                    </option>
                                @endforeach
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
                            <a href="{{ url('/') }}" class="btn btn-outline-secondary">
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
@endsection