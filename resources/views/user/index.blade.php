@extends('app')

@section('content')
<a href="{{ route('user.create') }}" class="btn btn-sm btn-success"><i class="material-icons">add</i></a>

    <table class="table caption-top">
        <caption>List of users</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Age </th>
            <th scope="col">User Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @if ( count( $users ) > 0 )
            @foreach ($users as $user )
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->first_name .' ' . $user->last_name }}</td>
                <td>{{$user->age }}</td>
                <td>{{ $user->user_type_id ?? "N/A" }}</td>

                <td>
                    <a href="" class="btn btn-sm btn-primary"><i class="material-icons">create</i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="material-icons">delete</i></a>
                </td>
              </tr>
            @endforeach
          @else
          <tr><td colspan="5" class="text-center text-danger"> NO RECORD FOUND </td></tr>
          @endif
        </tbody>
      </table>
@endsection
