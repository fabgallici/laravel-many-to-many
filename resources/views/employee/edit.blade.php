@extends('layout.base')

@section('content')

<div class="row">
  <div class="col-12">
    <h2>Create New Employee</h2>
  </div>
  <div class="col-12">
      <form action="{{ route('employee.update', $employee->id) }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="firstname">firstName</label>
            <input value="{{ $employee->firstname }}" class="form-control" name="firstname" type="text" placeholder="" />
        </div>

        <div class="form-group">
            <label for="lastname">lastname</label>
            <input value="{{ $employee->lastname }}" class="form-control" name="lastname" type="text" placeholder="" />
        </div>

        <div class="form-group">
            <label>Tasks</label>
            <select class="form-control" name="tasks[]" multiple>
                <option>---</option>
                @foreach($tasks as $task)

                    <option value="{{ $task->id }}"
                        @if($employee-> tasks() ->find($task->id)) selected @endif
                    >{{ $task->title }}</option>

                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>  
  </div>
</div>

@endsection