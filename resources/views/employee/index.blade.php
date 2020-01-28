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
    <div class="table">
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
          </tr>      
        @endforeach
      </tbody>

    </div>
  </div>

</div>

@endsection