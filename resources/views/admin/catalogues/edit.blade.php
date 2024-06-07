@extends('admin.layouts.master')

@section('title')
    Cập nhật danh mục
@endsection

@section('content')
    <form action="{{ route('admin.catalogues.update', $model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $model->name }}">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Ảnh danh mục</label>
            <input type="file" class="form-control" id="cover" name="cover">
            <img src="/storage/{{ $model->cover }}" alt="" width="50px" height="50px">
        </div>
        <div class="mb-3 form-check">

            <label class="form-check-label" for="is_active">
                <input type="checkbox" class="form-check-input" id="is_active"  value="1"
                    @if ($model->is_active) checked @endif name="is_active" >Hiển thị
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
