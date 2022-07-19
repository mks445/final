@extends('layouts.app')
@section('content')


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a job</title>
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
                <div class="card-header">Create a new job</div>
                <div class="card-body">

                    <form action="{{route('jobs.store')}}" method="post">
                        @csrf
                        <label>Short description</label>
                        <input type="text" name="name" class="form-control" placeholder="short description">
                        <br>

                        <label>Detailed description</label>
                        <textarea name="description" class="form-control"></textarea>
                        <br>

                        <label>Job type</label>
                        <select name="category_id" class="form-control">
                            <option>Select</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <input type="submit" value="submit" class=" btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


@endsection
