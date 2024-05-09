@extends('layouts.app')

@section('content')
    <div class="flex flex-col p-6 min-w-[38rem] max-w-[45rem]">
        <h1 class="text-5xl text-center mb-[1rem]">Task List</h1>
            <x-create-task />
        @yield('tasks')
    </div>
@endsection
