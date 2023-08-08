@extends('layout')

@section('conteudo')
<div class="mt-5">
    <a style="width: 100px;" class="btn btn-primary btn-sm" href="{{route('task.index')}}">Back</a>
</div>
<div class="mt-5">
    <form action="{{ route('task.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title task">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description task</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <button style="width: 100px;" class="btn btn-primary btn-sm" type="submit">Save</button>
        </div>
    </form>

</div>
@endsection
