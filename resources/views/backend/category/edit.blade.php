@extends('backend.layouts.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card">
                        <div class="card-header">Edit category {{$category->name}}</div>

                                <div class="card">
                                    <div class="card-body">

                                        <form class="forms-sample" action="{{route('category.update', $category->id)}}"
                                              method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" value="{{$category->name}}"
                                                       class="form-control @error('name') is-invalid @enderror"
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
                                                <button type="submit" class="btn btn-primary">Update</button>
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
@endsection

