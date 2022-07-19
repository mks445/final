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
                                @csrf
{{method_field('PUT')}}
                                @foreach($roles as $role)
                                    <div class="form-check-">
                                        <input type="checkbox" name="roles[]" value="{{$role->id}}">
                                        <label>{{$role->role}}</label>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

{{--<script>--}}
{{--    import Buttons from "../../../../public/admin/template/pages/ui-features/buttons.html";--}}
{{--    export default {--}}
{{--        components: {Buttons}--}}
{{--    }--}}
{{--</script>--}}
