<!-- resources/views/child.blade.php -->

@extends('layout')

@section('conteudo')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <span>{{ $message }}</span>
</div>
@endif
<div class="mt-5">
    <a style="width: 100px;" class="btn btn-primary btn-sm" href="{{route('task.create')}}">New</a>
</div>
<div class="mt-5">
    <table class="table table-sm">
        <thead>
            <tr>
                <th style="width: 5%;">ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th style="width: 5%;">Show</th>
                <th style="width: 5%;">Edit</th>
                <th style="width: 5%;">Destroy</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->status}}</td>
                <td>
                    <a style="width: 70px;" class="btn btn-primary btn-sm" href='{{route("task.show", $task->id)}}'>Show</a>
                </td>
                <td>
                    <a style="width: 70px;" class="btn btn-warning btn-sm" href='{{route("task.edit", $task->id)}}'>Edit</a>
                </td>
                <td>
                    <form action="{{route('task.destroy', $task->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="width: 70px;" class="btn btn-danger btn-sm">Destroy</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
