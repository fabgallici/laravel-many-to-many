@extends('layout.base')

@section('content')

<div class="row">
  <div class="col-12">
    <h2>Create New Employee</h2>
  </div>
  <div class="col-12">
      <form action="{{ route('employee.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="firstname">firstName</label>
            <input value="" class="form-control" name="firstname" type="text" placeholder="Inserisci un nome" />
        </div>

        <div class="form-group">
            <label for="lastname">lastname</label>
            <input value="" class="form-control" name="lastname" type="text" placeholder="Inserisci un cognome" />
        </div>

        <div class="form-group">
            <label>Tasks</label>
            <select class="form-control" name="tasks[]" multiple>
                <option>---</option>
                @foreach($tasks as $task)

                    <option value="{{ $task->id }}">{{ $task->title }}</option>

                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>  
  </div>
</div>

@endsection