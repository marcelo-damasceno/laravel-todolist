@extends('layout')

@section('conteudo')
<div class="mt-5">
    <a style="width: 100px;" class="btn btn-primary btn-sm" href="{{route('task.index')}}">Back</a>
</div>
<div class="mt-5">
    <form action="{{ route('task.update', $task->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" required class="form-control" name="title" id="title" placeholder="Title task" value="{{$task->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description task</label>
            <textarea class="form-control" required name="description" id="description" rows="3">{{$task->description}}</textarea>
        </div>
        <div class="mb-3">
            <select class="form-select col-md-3" aria-label="Default select example" name="status">
                <option value="pending">pending</option>
                <option value="finished">finished</option>
            </select>
        </div>
        <div class="mb-3">
            <button style="width: 100px;" class="btn btn-primary btn-sm" type="submit">Save</button>
        </div>
    </form>

</div>
@endsection
