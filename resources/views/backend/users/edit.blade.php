@extends('backend.layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card">
                        <div class="card-header">Edit user{{$user->name}}</div>

                        <div class="card-body">
                            <form action="{{route('users.update', $user)}}" method="POST">

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name }}" required autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Surname</label>

                                    <div class="col-md-6">
                                        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{$user->surname }}" required autofocus>

                                        @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                @csrf
                                {{method_field('PUT')}}

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Role</label>
                                <div class="col-md-6">
                                @foreach($roles as $role)
                                    <div class="form-check-">
                                        <input type="checkbox" name="roles[]" value="{{$role->id}}"
                                        @if($user->roles->pluck('id')->contains($role->id))checked @endif>
                                        <label>{{$role->role}}</label>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

