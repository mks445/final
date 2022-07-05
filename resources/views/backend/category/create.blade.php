@extends('backend.layouts.master')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <h3>Add Category</h3>
                        <div class="row justify-content-center">
                            <div class="col-md-10">

                                <div class="card">
                                    <div class="card-body">

                                        <form class="forms-sample" method="POST" action="{{route('category.store')}}"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                                       placeholder="name of category">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control
                                                @error('image') is-invalid
                                                @enderror"
                                                       name="image">
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
