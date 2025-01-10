<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    // Hiển thị danh sách người dùng
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Hiển thị trang tạo người dùng
    public function create()
    {
        return view('users.create');
    }

    // Lưu người dùng mới vào cơ sở dữ liệu
    public function store(CreateUserRequest $request)
    {
        $this->user->create($request->validated());
        return redirect()->route('users.index');
    }

    // Hiển thị chi tiết người dùng
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Hiển thị trang chỉnh sửa người dùng
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Cập nhật thông tin người dùng
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->route('users.index');
    }

    // Xóa người dùng
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
