@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách lớp</h2>

    <a href="{{ route('classes.create') }}" class="btn btn-primary mb-3">Thêm lớp</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tên lớp</th>
                <th>Khoa</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $c)
            <tr>
                <td>{{ $c->name }}</td>
                <td>{{ $c->department->name ?? '' }}</td>
                <td>
                    <a href="{{ route('classes.edit', $c->id) }}" class="btn btn-warning">Sửa</a>

                    <form action="{{ route('classes.destroy', $c->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Xoá?')" class="btn btn-danger">Xoá</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection