<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(): string
    {
        return 'Hello World';
    }

    public function show()
    {

        $workers = Worker::all()->take(3);
        foreach ($workers as $worker) {
            dump($worker->toArray());
        }
    }

    public function create()
    {
        $worker = [
            'name' => fake()->name,
            'surname' => fake()->lastName,
            'age' => fake()->numberBetween(18, 35),
            'email' => fake()->email,
            'is_married' => fake()->randomElement([true, false]),
        ];

        Worker::query()->create($worker);

        print_r('Worker was created');
    }

    public function update()
    {
        $worker = Worker::query()->inRandomOrder()->first();

        $worker->update([
            'name' => fake()->name,
            'surname' => fake()->lastName,
        ]);

        print_r('Worker was updated');
    }

    public function delete()
    {
        $worker = Worker::query()->inRandomOrder()->first()?->delete();

        print_r('Worker was deleted');
    }
}
