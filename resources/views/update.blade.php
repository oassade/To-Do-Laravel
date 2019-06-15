@extends('layout')

@section('content')

<div class="container" style="margin-top:200px;">
    <div class="row">
        <div  class="col-12 d-flex mt-4 justify-content-center">
            <form class="col-6" action="{{route('todo.save', ['id' => $todo->id])}}" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control" name="todo" value="{{$todo->todo}}" placeholder="Create a new todo">
                <br>
            </form>
        </div>
    </div>
</div> 

@stop