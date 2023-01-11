@extends('layouts.master_admin')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Danh sách quản trị</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <a href="{{ route('admin.admins.create') }}" class="btn btn-primary mb-2">Thêm</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Danh sách
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($listAdmin as $admin)
                        <tr>
                            <td>{{ $admin->id }}</td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-success btn-sm rounded-0"><i class="fa fa-edit"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <form action="{{ route('admin.admins.destroy', $admin->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm rounded-0"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
