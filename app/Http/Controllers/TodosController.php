<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return $todos;
    }

    public function create(Request $request)
    {
        $todo = Todo::create($request->all());

        return $todo;
    }

    public function get(Request $request)
    {
        $todo = Todo::findOrFail($request->id);

        return $todo;
    }

    public function update(Request $request)
    {
        $todo = Todo::find($request->id);
        $todo->update($request->all());

        return $todo;
    }

    public function delete(Request $request)
    {
        $todo = Todo::destroy($request->id);

        return $todo;
    }

    public function deleteAll()
    {
        $todos = Todo::getQuery()->delete();

        return $todos;
    }
}
