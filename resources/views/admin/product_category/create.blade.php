@extends('layouts.master_admin')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Thêm loại sản phẩm</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
            <li class="breadcrumb-item active">Thêm loại sản phẩm</li>
        </ol>
        <form action="{{ route('admin.category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" style="font-weight: bold">Tên loại</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-2">Thêm</button>
            </div>
        </form>
    </div>
@endsection
