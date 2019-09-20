@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">Create Todos</h1>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card card-default">

                <div class="card-header text-center" >Create New Todo</div>

                <div class="card-body">


                    <form action="{{route('todo.store')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">

                            <span
                                class="badge text text-danger"> {{$errors->has('name') ? $errors->first('name'):''}} </span>

                        </div>

                        <div class="form-group">
                            <textarea name="description" placeholder="Description" cols="5" rows="5"
                                      class="form-control"  > {{old('description')}}</textarea>

                            <span
                                class="badge text text-danger"> {{$errors->has('description') ? $errors->first('description'):''}} </span>

                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Create Todo</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
