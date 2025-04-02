@extends('layout')
@section('title', 'Danh sách tin tức')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold">Danh Sách Tin Tức</h2>
        <a href="{{ url('/tin/them') }}" class="btn btn-success">
            <i class="fas fa-plus me-2"></i> Thêm Tin Mới
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @foreach ($data as $tin)
    <div class="card mb-3 shadow-sm border-0">
        <div class="card-body">
            <h4 class="card-title text-dark fw-bold">{{ $tin->tieu_de }}</h4>
            <p class="card-text text-muted">{{ $tin->mo_ta }}</p>
            <p class="mb-2"><strong>Loại tin:</strong> <span class="badge bg-secondary">{{ $tin->category->ten_loai ?? 'Chưa có loại' }}</span></p>
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ url('/tin/chi-tiet/' . $tin->id) }}" class="btn btn-outline-info btn-sm">
                    <i class="fas fa-eye"></i> Xem
                </a>
                <a href="{{ url('/tin/sua/' . $tin->id) }}" class="btn btn-outline-warning btn-sm">
                    <i class="fas fa-edit"></i> Sửa
                </a>
                <form action="{{ url('/tin/xoa/' . $tin->id) }}" method="POST" class="d-inline"
                      onsubmit="return confirm('Bạn có chắc muốn xóa tin này?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-trash"></i> Xóa
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection