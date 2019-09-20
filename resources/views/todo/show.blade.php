@extends('layouts.app')

@section('title')
    Single Todo: {{ $todo->name }}
@endsection

@section('content')

    <h1 class="text-center my-5">
        {{ $todo->name }}
    </h1>

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card card-default">

                <div class="card-header  text-center">Details</div>

                <div class="card-body">
                    {{ $todo->description }}
                </div>

            </div>

            <div class="row">

                <div class="col-md-5">
                    <a href="{{route('todo.edit',$todo->id)}}" class="btn btn-info my-2 ">Edit</a>

                    <a href="{{route('todo.index')}}" class="btn btn-dark btn-sm my-2 ">Back</a>
                </div>

                <div class="col-md-3">
                    <form action="{{route('todo.destroy',$todo->id)}}"
                          method="post">
                        {{ csrf_field() }}
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger my-2">Delete</button>

                    </form>
                </div>

                {{--            <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger my-2">Delete</a>--}}


            </div>
        </div>
    </div>
@endsection
