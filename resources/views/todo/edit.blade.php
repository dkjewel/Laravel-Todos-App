@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">Edit Todos</h1>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card card-default">

                <div class="card-header text-center">Edit Todo</div>

                <div class="card-body">

                    <form action="{{route('todo.update',$todo->id)}}" method="POST">
                        @csrf
                        @method("PATCH")

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name"
                                   value="{{ $todo->name }}">
                            <span
                                class="badge text text-danger"> {{$errors->has('name') ? $errors->first('name'):''}} </span>

                        </div>

                        <div class="form-group">
                            <textarea name="description" placeholder="Description" cols="5" rows="5"
                                      class="form-control">{{ $todo->description }}</textarea>
                            <span
                                class="badge text text-danger"> {{$errors->has('description') ? $errors->first('description'):''}} </span>

                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update Todo</button>
                            <a href="{{route('todo.show',$todo->id)}}" class="btn btn-danger btn-sm my-2 ">Back</a>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
