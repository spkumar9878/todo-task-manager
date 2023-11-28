@extends('layouts.main')

@push('head')
    <title>Update Todo</title>
@endpush

@section('main-section')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card bg-light">
                <div class="card-body">
                    <h2 class="text-primary text-center mb-4">Update Task</h2>
                    <form action="{{ route("todo.updateData") }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $todo->name }}">
                        </div>

                        <div class="mb-3">
                            <label for="work" class="form-label">Work</label>
                            <input type="text" name="work" class="form-control" id="work" value="{{ $todo->work }}">
                        </div>

                        <div class="mb-3">
                            <label for="duedate" class="form-label">Due Date</label>
                            <input type="date" name="duedate" class="form-control" id="duedate" value="{{ $todo->duedate }}">
                        </div>

                        <input type="number" name="id" value="{{ $todo->id }}" hidden>
                        
                        <button class="btn btn-success btn-lg mt-4">Update Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
