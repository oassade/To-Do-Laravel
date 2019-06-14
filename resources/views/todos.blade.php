@extends('layout')


@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="/create/todo" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control" name="todo" placeholder="Create a new todo">
            </form>
        </div>
    </div> 
    <hr>
    @foreach($todos as $todo)
    {{ $todo->todo }}
    <hr>
    @endforeach
@stop