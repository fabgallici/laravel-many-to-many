@extends('layout.base')

@section('content')

<div class="row">
  <div class="col-12">
    <h1>Employees</h1>
  </div>
  <div class="col-12 text-right">
      <a class="btn-primary btn right create" href="{{ route('employee.create') }}">Aggiungi Nuovo</a>
  </div>
  <div class="col-12">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>Tasks</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employees as $employee)
          <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>
              @foreach ($employee -> tasks as $task)
                  <span><a class="emp-task-del" href="{{ route('employee.task.remove', [$employee->id, $task->id]) }}">X</a>{{ $task->title }} - </span>
              @endforeach
            </td>
            <td>
                <a class="btn btn-success" href="{{ route('employee.edit', $employee->id) }}">EDIT</a>
            </td>
            <td>
                <a class="btn btn-danger" href="{{ route('employee.destroy', $employee->id) }}">DELETE</a>
            </td>
          </tr>      
        @endforeach
      </tbody>

    </table>
  </div>

</div>

@endsection