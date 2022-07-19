@extends('backend.layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card">
                        <div class="card-header">Users</div>

                        <div class="card-body">


                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Surname</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)

                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->surname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{implode(', ', $user->roles()->get()->pluck('role')->toArray()) }}</td>

                                        <td>
                                            <a href="{{route('users.edit', $user->id)}}">
                                                <button type="button" class="btn btn-primary" class="float-left">Edit</button>
                                        </td>

                                        <td>
                                            <form action="{{route('users.destroy', $user)}}" method="POST"
                                                  class="float-left">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-warning">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

