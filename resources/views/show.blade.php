@extends('layouts.app')

@section('content')
    <div class="flex flex-col p-6">
        <h1 class="text-5xl text-center mb-[1rem]">Edit Task</h1>
        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
            @csrf

            <label class="flex flex-row my-2">
                <input type="text" name="description" value="{{ $task->description }}"
                       class="w-[100%] bg-slate-600 text-2xl text-slate-400 w-[38rem] border-4 border-slate-700 ml-1 rounded-md outline-0">
                <input type="submit" name="submit" value="+"
                       class="text-3xl text-center w-[3rem] ml-[0.5rem] border-4 border-slate-700 bg-slate-600 text-white rounded-md cursor-pointer">
            </label>
        </form>
    </div>
@endsection
