@extends('layouts.app')

@section('content')
<div class="container-fluid usersManagement">
    <div class="row justify-content-center">
        <div class="col-md-8 card-style">
            <div class="card">
                <div class="card-header">Users</div>
                  <table class="table">
                    <thead>
                      <th>User's name</th>
                      <th>User's email</th>
                      <th>Roles</th>
                      <th>Remove</th>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                        <td><form action="{{route('admin.users.destroy', $user)}}" method="POST">
                          @csrf
                          {{method_field('DELETE')}}
                          <button type="submit" class="btn btn-danger">Remove</button>
                        </form></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
