@extends('layouts.master_admin')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Chỉnh sửa</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chỉnh sửa</li>
        </ol>
        <form action="{{ route('admin.category.update', $category->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">ID</label>
                <input readonly type="text" name="id" class="form-control" value="{{ old('name', $category->id) }}">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-2">Lưu</button>
            </div>
        </form>
    </div>
@endsection

