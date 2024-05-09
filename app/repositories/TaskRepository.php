<?php

declare(strict_types=1);

namespace App\repositories;

use App\Models\Task;
use Illuminate\Support\Collection;

class TaskRepository
{
    public function fetchAll()
    {
        return Task::orderBy('is_completed')
            ->orderBy('updated_at', 'desc')
            ->simplePaginate(10);
    }

    public function insert(array $task)
    {
        return Task::create($task);
    }

    public function selectOne($id)
    {
        return Task::where('id', '=', $id)->first();
    }

    public function update($id)
    {
        return Task::where('id', '=', $id)
            ->update(['description' => $_POST['description']]);
    }

    public function complete($id)
    {
        return Task::where('id', '=', $id)
            ->update(['is_completed' => 1]);
    }

    public function uncomplete($id)
    {
        return Task::where('id', '=', $id)
            ->update(['is_completed' => 0]);
    }

    public function delete($id)
    {
        return Task::where('id', '=', $id)->delete();
    }
}
