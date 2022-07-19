@extends('layouts.app')
@section('content')


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">Job list</div>
                <div class="card-body">


                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $job)
                            <tr>
                                <td><img src="{{Storage::url($job->category->image)}}" alt="" width="50" height="50">
                                </td>
                                <td>{{$job->name}}</td>
                                <td>{{$job->description}}</td>
                                <td>{{$job->category->name}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
