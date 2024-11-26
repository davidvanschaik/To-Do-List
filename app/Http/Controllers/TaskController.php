<?php

namespace App\Http\Controllers;

use App\repositories\TaskRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function __construct(
        private readonly TaskRepository $repo,
    ) { }

    public function index(): View | string
    {
        return view('tasks', [
            'tasks' => $this->repo->fetchAll(),
            'id' => '',
        ]);
    }

    public function create(Request $request): RedirectResponse
    {
        $this->repo->insert([
            'description' => $request->get('description'),
            'is_completed' => false,
        ]);

        redirect(route('tasks.index'));
    }

    public function show($id): View | string
    {
        return view('show', [
            'task' => $this->repo->selectOne($id),
        ]);
    }

    public function update($id): RedirectResponse
    {
        $this->repo->update($id);
        redirect(route('tasks.index'));
    }

    public function complete($id)
    {
        $this->repo->complete($id);
        redirect(route('tasks.index'));
    }

    public function uncomplete($id)
    {
        $this->repo->uncomplete($id);
        redirect(route('tasks.index'));
    }

    public function delete($id): RedirectResponse
    {
        $this->repo->delete($id);
        redirect(route('tasks.index'));
    }
}
