@extends('user.contacts.main')
@section('content')
  <h2 class="text-center"><strong>Doctor's Contact Lists</strong></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($doctorLists as $doctor)
            <tr>
              <td><img class="img-circle" src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( $doctor->email ) ) ) }}?d=mm" width="45"/></td>
              <td>{{ $doctor->name }}</td>
              <td>{{ $doctor->email }}</td>
              <td>{{ $doctor->phone }}</td>
              <td><button class="btn btn-primary">Email</button></td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
