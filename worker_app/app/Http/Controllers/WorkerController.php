<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\IndexRequest;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(IndexRequest $request)
    {
        $data = $request->validated();

        $query = Worker::query();

        if (isset($data['name'])) {
            $query->where('name', 'like', '%' . $data['name'] . '%');
        }

        if (isset($data['surname'])) {
            $query->where('surname', 'like', '%' . $data['surname'] . '%');
        }

        if (isset($data['email'])) {
            $query->where('email', 'like', '%' . $data['email'] . '%');
        }

        if (isset($data['from'])) {
            $query->where('age', '>=', $data['from']);
        }

        if (isset($data['to'])) {
            $query->where('age', '<=', $data['to'] );
        }

        if (isset($data['description'])) {
            $query->where('description', 'like', '%' . $data['description'] . '%' );
        }

        if (isset($data['is_married'])) {
            $query->where('is_married','=' ,true);
        }

        $workers = $query->paginate(4);
        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));
    }

    public function create()
    {
        return view('worker.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        Worker::query()->create($data);

        return redirect()->route('workers.index');
    }

    public function edit(Worker $worker)
    {
        return view('worker.edit', compact('worker'));
    }

    public function update(Worker $worker, UpdateRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);

        $worker->update($data);

        $a = Worker::query()->find($worker->id);

        return redirect()->route('workers.show', $a);
    }

    public function delete(Worker $worker)
    {
        $worker->delete();

        return redirect()->route('workers.index');
    }
}
