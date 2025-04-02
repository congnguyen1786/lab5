@extends('layout')
@section('title', 'Chi tiết tin tức')
@section('content')
<div class="container mt-4">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white text-center py-3">
            <h2 class="mb-0">Chi tiết Tin Tức</h2>
        </div>
        <div class="card-body p-4">
            <h3 class="text-primary">{{ $news->tieu_de }}</h3>
            <p class="text-muted"><strong>Mô tả:</strong> {{ $news->mo_ta }}</p>
            
            <div class="mb-3">
                <strong>Loại tin:</strong> 
                <span class="badge bg-secondary">{{ $news->category->ten_loai ?? 'Chưa có loại' }}</span>
            </div>
            
            <div class="mb-3">
                <strong>Hình ảnh:</strong><br>
                @if ($news->hinh_anh)
                    <img src="{{ $news->hinh_anh }}" alt="Hình ảnh tin tức" class="img-fluid rounded shadow-sm" style="max-width: 300px;">
                @else
                    <p class="text-muted">Không có hình ảnh</p>
                @endif
            </div>
            
            <p><strong>Lượt xem:</strong> <span class="badge bg-dark">{{ $news->luot_xem }}</span></p>
            
            <p><strong>Trạng thái:</strong> 
                <span class="badge {{ $news->an_hien ? 'bg-danger' : 'bg-success' }}">
                    {{ $news->an_hien ? 'Ẩn' : 'Hiện' }}
                </span>
            </p>
            
            <p><strong>Nổi bật:</strong> 
                <span class="badge {{ $news->noi_bat ? 'bg-warning' : 'bg-secondary' }}">
                    {{ $news->noi_bat ? 'Có' : 'Không' }}
                </span>
            </p>
            
            <div class="row text-muted">
                <div class="col-md-6"><strong>Ngày tạo:</strong> {{ $news->created_at }}</div>
                <div class="col-md-6 text-md-end"><strong>Ngày cập nhật:</strong> {{ $news->updated_at }}</div>
            </div>
            
            <div class="d-flex justify-content-end mt-4">
                <a href="{{ url('/') }}" class="btn btn-outline-secondary">Quay lại</a>
            </div>
        </div>
    </div>
</div>
@endsection