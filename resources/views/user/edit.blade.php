@extends('app')

@section('content')
<a href="{{ route('user.index') }}" class="btn btn-sm btn-success"><i class="material-icons">arrow_back</i></a>

<form action="{{ route('user.update' , ['id' => $user->id ]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required
        value="{{ $user->first_name }}">
      </div>
      <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required
        value="{{ $user->last_name }}">
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" required
        value="{{ $user->age }}">
      </div>
      <div class="mb-3">
        <label for="date_of_birth" class="form-label">Date of birth</label>
        <input type="text" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Select date of birth" required
        value="{{ $user->date_of_birth }}">
      </div>
      <div class="mb-3">
            <button type="submit" class="btn btn-small btn-success">Submit</button>
      </div>
</form>
@endsection
