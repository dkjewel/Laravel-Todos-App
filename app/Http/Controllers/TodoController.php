<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        return view('todo.index')->with('todos', Todo::all());
    }


    public function create()
    {
        return view('todo.create');
    }


    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:200',
            'description' => 'required'
        ]);

        Todo::create(request()->all());

        session()->flash('success', 'Todo created successfully.');
        return redirect()->route('todo.create');
    }


    public function show(Todo $todo)
    {
        return view('todo.show')->with('todo', $todo);
    }


    public function edit(Todo $todo)
    {
        return view('todo.edit')->with('todo', $todo);
    }


    public function update(Request $request, Todo $todo)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:200',
            'description' => 'required'
        ]);

        $todo->update(request()->all());

        session()->flash('success', 'Todo Updated successfully.');
        return redirect()->route('todo.index');
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();
        session()->flash('success', 'Todo deleted successfully.');
        return redirect()->route('todo.index');
    }

    public function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();

        session()->flash('success', 'Todo completed successfully.');
        return redirect()->route('todo.index');
    }
}
