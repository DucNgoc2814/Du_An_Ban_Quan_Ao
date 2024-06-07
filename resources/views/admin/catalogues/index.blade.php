@extends('admin.layouts.master')

@section('title')
    Danh sách danh mục
@endsection

@section('content')
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Hiển thị</th>
                <th scope="col">Thời gian tạo mới</th>
                <th scope="col">Thời gian cập nhật</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)

                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>
                        <img src="/storage/{{ $item->cover }}" alt="" width="50px" height="50px">
                    </td>
                    <td>{!! $item->is_active ? '<span class="badge bg-primary">Có</span>' : '<span class="badge bg-danger">Không</span>' !!}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('admin.catalogues.show', $item->id) }} "type="button" class="btn btn-sm btn-primary">Xem</a>
                        <a href="{{ route('admin.catalogues.edit', $item->id) }} "type="button" class="btn btn-sm btn-warning">Sửa</a>
                        <a href="{{ route('admin.catalogues.destroy', $item->id) }} "type="button" 
                            onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                            class="btn btn-sm btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $data->links() }}
@endsection
