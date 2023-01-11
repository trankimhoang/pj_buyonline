@extends('layouts.master_admin')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Sửa thông tin</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
            <li class="breadcrumb-item active">Sửa thông tin</li>
        </ol>
        <form action="{{ route('admin.admins.update', $admin->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $admin->name) }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{ old('name', $admin->email) }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}"
                       autocomplete="off">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-2">Lưu</button>
            </div>
        </form>
    </div>
@endsection

