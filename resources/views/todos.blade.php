@extends('layout')


<div  class="col-12 d-flex mt-4 justify-content-center">
    <div class="col-lg-5">
        <form action="/create/todo" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control" name="todo" placeholder="Create a new todo">
            <br>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div>
</div> 

<br>
<br>
    

@section('content')
    <div class="container">
        @foreach($todos as $todo)
            <div class="row">
                <div class="col-lg-1 mr-3">
                    @if(!$todo->completed)
                        <a href="{{ route('todo.completed', [ 'id' => $todo->id]) }}" class="btn btn-xs btn-success" style="height=20px;">Mark as completed</a>
                    @endif
                    @if($todo->completed)
                        <h5 style="color:green;">Completed</h5>
                    @endif
                </div>
                <div class="col-lg-8">
                    <h5>{{ substr($todo->todo, 0, 80) }}...</h5>
                </div> 
                <div class="col-lg-2">
                    <a href="{{route('todo.delete', ['id' => $todo->id])}}" class="btn btn-danger" style="height=20px;">Delete</a>
                    <a href="{{route('todo.update', ['id' => $todo->id])}}" class="btn btn-primary" style="height=20px;">update</a>
                </div>
            </div>
        <hr>
        @endforeach
    </div>
@stop