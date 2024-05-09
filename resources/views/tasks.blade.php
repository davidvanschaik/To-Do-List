@extends('index')

@section('tasks')
    <div class="space-y-2">
        @foreach ($tasks as $task)
            <x-task :task="$task" />
        @endforeach
        {{ $tasks->links() }}
    </div>
@endsection
