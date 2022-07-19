@extends('backend.layouts.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card">
                        <div class="card-header">Manage category</div>


                        <table class="table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($categories as $category)

                                <td><img src="{{Storage::url($category->image)}}" alt=""></td>
                                <td>{{$category->name}}</td>

                                <td>
                                    <a href="{{route('category.edit', [$category->id])}}">
                                        <button type="button" class="btn btn-primary" class="float-left">Edit
                                        </button>
                                    </a>
                                </td>


                                <td>
                                    <form action="{{route('category.destroy', $category->id)}}"
                                          method="post">@csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-warning">Delete</button>
                                    </form>
                                </td>


                                </tr>

                            @empty
                                <td>No categories</td>
                            @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





