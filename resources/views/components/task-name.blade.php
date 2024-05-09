@props([
    'task'
])

<div>
    <p x-show="!update" @class([
        'line-through decoration-red-800 decoration-4' => $task->is_completed
    ])>
        {{ $task->description }}
    </p>

    <form method="POST" action="{{ route('tasks.update', $task->id) }}" x-show="update" x-cloak>
        @csrf
        <input type="text" name="description" value="{{ $task->description }}"
        class="w-full px-1 bg-slate-600 text-orange-600 outline-0 rounded-md">
    </form>
</div>
