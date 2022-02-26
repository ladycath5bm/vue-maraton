<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Todo\StoreAndUpdateRequest;
use App\Http\Resources\Api\TodoResource;
use App\Models\Todo;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ToDoController extends Controller
{
    public function index(): ResourceCollection
    {
        return TodoResource::collection(Todo::paginate());
    }

    public function store(StoreAndUpdateRequest $request)
    {
        $todo = new Todo();
        $validatedData = $request->validated();

        $todo->title = $validatedData['title'];
        $todo->description = $validatedData['description'];
        $todo->done = $validatedData['done'];

        $todo->save();

        return TodoResource::make($todo)->response()->setStatusCode(201);
    }

    public function show(Todo $todo)
    {
        return TodoResource::make($todo);
    }

    public function update(StoreAndUpdateRequest $request, Todo $todo)
    {
        $validatedData = $request->validated();

        $todo->title = $validatedData['title'];
        $todo->description = $validatedData['description'];
        $todo->done = $validatedData['done'];

        $todo->save();

        return TodoResource::make($todo);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response(null, 204);
    }
}
