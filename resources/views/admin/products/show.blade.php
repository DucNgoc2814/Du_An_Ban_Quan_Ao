@extends('admin.layouts.master')

@section('title')
    Chi tiết danh mục
@endsection

@section('content')
    <form action="{{ route('admin.catalogues.index') }}">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $model->id }}" disabled>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $model->name }}" disabled>
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Ảnh danh mục</label>
            <img src="/storage/{{ $model->cover }}" alt="" width="250px">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Thời gian thêm</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $model->created_at }}"
                disabled>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Thời gian sửa</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $model->updated_at }}"
                disabled>
        </div>
        <div class="mb-3 form-check">
            <label class="form-label">Hiển thị: </label>
            {!! $model->is_active ? '<span class="badge bg-primary">Có</span>' : '<span class="badge bg-danger">Không</span>' !!}
        </div>
        <button type="submit" class="btn btn-primary">Quay lại trang chủ</button>
    </form>
@endsection
