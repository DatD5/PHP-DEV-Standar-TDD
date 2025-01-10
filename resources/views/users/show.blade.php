@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Thông tin người dùng</h1>
    <div class="mb-3">
        <strong>ID:</strong> {{ $user->id }}
    </div>
    <div class="mb-3">
        <strong>Tên:</strong> {{ $user->name }}
    </div>
    <div class="mb-3">
        <strong>Email:</strong> {{ $user->email }}
    </div>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Quay lại</a>
</div>
@endsection
