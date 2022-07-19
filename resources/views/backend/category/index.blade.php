@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h4>Manage Category</h4>
            <div class="row justify-content-center">


                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">


                            <div class="table-responsive">
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
                                                <button
                                                    class="btn btn-info">
                                                    <i class="mdi mdi-table-edit"></i>
                                                </button>
                                            </a>
                                        </td>


                                        <td>
                                            <form action="{{route('category.destroy', $category->id)}}"
                                                  method="post">@csrf
                                                @method('DELETE')

                                                <button type="type" class="btn btn-danger">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
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

            <script>
                import Buttons from "../../../../public/admin/template/pages/ui-features/buttons.html";

                export default {
                    components: {Buttons}
                }
            </script>
