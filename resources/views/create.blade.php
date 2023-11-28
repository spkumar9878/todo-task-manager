@extends('layouts.main')

@push('head')
    <title>Todo List App</title>
@endpush

@section('main-section')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card bg-light">
                <div class="card-body">
                    <h2 class="text-primary text-center mb-4">Add Task</h2>
                    <form action="{{ route("todo.store") }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                            <div class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="work" class="form-label">Work</label>
                            <input type="text" name="work" class="form-control" id="work">
                            <div class="text-danger">
                                @error('work')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="duedate" class="form-label">Due Date</label>
                            <input type="date" name="duedate" class="form-control" id="duedate">
                            <div class="text-danger">
                                @error('duedate')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <button class="btn btn-success btn-lg mt-4">Add Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
