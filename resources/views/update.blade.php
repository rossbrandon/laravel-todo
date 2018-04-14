@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 text-center">
            <form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" name="todo" value="{{ $todo->todo }}" />
                <hr />
            </form>
        </div>
    </div>

@stop
