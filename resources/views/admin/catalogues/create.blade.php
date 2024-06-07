@extends('admin.layouts.master')

@section('title')
    Thêm danh mục
@endsection

@section('content')
<form action="{{ route('admin.catalogues.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Tên danh mục</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="cover" class="form-label">Ảnh danh mục</label>
      <input type="file" class="form-control" id="cover" name="cover">
    </div>
    <div class="mb-3 form-check">
      
      <label class="form-check-label" for="is_active">
        <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" checked>Hiển thị
    </label>
    </div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
  </form>
@endsection
