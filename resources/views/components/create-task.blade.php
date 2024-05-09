<form method="POST" action="{{ route('tasks.create') }}">
    @csrf

    <label class="flex flex-row my-2 w-full">
        <input type="text" name="description" placeholder="Add New Task"
               class="bg-slate-600 text-3xl text-slate-400 border-4 border-slate-700 rounded-md outline-0 w-[93%]">
        <input type="submit" name="submit" value="+"
               class="text-3xl text-center w-[7%] ml-2 border-4 border-slate-700 bg-slate-600 text-white rounded-md cursor-pointer">
    </label>
</form>
