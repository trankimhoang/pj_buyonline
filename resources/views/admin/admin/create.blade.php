@extends('layouts.master_admin')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Thêm quản trị</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
            <li class="breadcrumb-item active">Thêm quản trị</li>
        </ol>
        <form action="{{ route('admin.admins.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" style="font-weight: bold">Name</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" style="font-weight: bold">Email</label>
                <input type="email" name="email" class="form-control">
                @error('email')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" style="font-weight: bold">Password</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-2">Thêm</button>
            </div>
        </form>
    </div>
@endsection
