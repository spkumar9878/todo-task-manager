@extends('layouts.main')

@push('head')
    <title>Task Manager</title>
    <style>
        body {
            background-image: url('path/to/your/image.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #ffffff; /* White text color for body */
        }

        .container {
            margin-top: 4rem;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        h2 {
            color: #ffffff; /* White text color for headings */
        }

        .btn-primary {
            background-color: #ff0000;
            color: #ffffff; /* White text color for primary button */
        }

        table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: #3498db; /* Blue color for table header */
            color: #ffffff; /* White text color for table header */
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #ffffff; /* White border color for table */
        }

        .btn-warning {
            background-color: #f39c12; /* Orange color for warning button */
            color: #ffffff; /* White text color for warning button */
        }

        .btn-danger {
            background-color: #e74c3c; /* Red color for danger button */
            color: #ffffff; /* White text color for danger button */
        }
    </style>
@endpush

@section('main-section')

<div class="container">
    <div class="header-section">
        <h2>All Tasks</h2>
        <a href="{{ route("todo.create") }}" class="btn btn-primary btn-lg">Add Task</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Work</th>
                <th>Due Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
                <tr>
                    <td>{{ $todo->name }}</td>
                    <td>{{ $todo->work }}</td>
                    <td>{{ $todo->duedate }}</td>
                    <td>
                        <a href="{{ route("todo.edit", $todo->id) }}" class="btn btn-warning btn-sm">Update</a>
                        <a href="{{ route("todo.delete", $todo->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
