@props([
    'task'
])

<div class="flex flex-row justify-between items-center bg-slate-800 py-2 px-5 rounded-md" x-data="{ update: false}">

    <div class="p-1 text-xl ">
        <form method="POST" action="{{ route(($task->is_completed ? 'tasks.uncomplete' : 'tasks.complete'), $task->id) }}" x-data="{}">
            @csrf
            <input type="checkbox" name="is_completed" x-on:click="$event.target.form.submit()"
                class="w-[1.75vw] h-[1.75vh] accent-red-600" @checked($task->is_completed)>
        </form>
    </div>

    <div class="w-full p-1 text-xl text-left">
        <x-task-name :task="$task" />
    </div>

    <div class="mx-2 text-white p-3.5 block cursor-pointer" x-on:click="update = !update">
        <i class="gg-pen"></i>
    </div>

    <div>
        <a href="{{ route('tasks.delete', $task->id) }}" class="text-white p-2 block">
            <i class="gg-trash"></i>
        </a>
    </div>

</div>
