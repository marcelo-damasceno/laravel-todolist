@extends('layout')

@section('conteudo')
<div class="mt-5">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title task" disabled value="{{$task->title}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description task</label>
        <textarea class="form-control" name="description" id="description" rows="3" disabled>{{$task->description}}</textarea>
    </div>
    <div class="mt-5">
        <a style="width: 100px;" class="btn btn-primary btn-sm" href="{{route('task.index')}}">Back</a>
    </div>


</div>
@endsection
