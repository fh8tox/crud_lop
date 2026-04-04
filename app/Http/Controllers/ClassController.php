<?php

namespace App\Http\Controllers;

use App\Models\Clazz;    // <- đổi đây
use App\Models\Department;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Clazz::with('department')->get(); // <- đổi đây
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('classes.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'department_id' => 'required'
        ]);

        Clazz::create($request->all()); // <- đổi đây

        return redirect()->route('classes.index')
            ->with('success', 'Thêm lớp thành công!');
    }

    public function edit($id)
    {
        $class = Clazz::findOrFail($id); // <- đổi đây
        $departments = Department::all();

        return view('classes.edit', compact('class', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $class = Clazz::findOrFail($id); // <- đổi đây

        $request->validate([
            'name' => 'required',
            'department_id' => 'required'
        ]);

        $class->update($request->all());

        return redirect()->route('classes.index')
            ->with('success', 'Cập nhật thành công!');
    }

    public function destroy($id)
    {
        Clazz::destroy($id); // <- đổi đây

        return redirect()->route('classes.index')
            ->with('success', 'Xoá thành công!');
    }
}