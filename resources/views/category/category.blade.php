@extends('layouts.app')
@section('content')
<br>
<h2 class="text-center">Category</h2>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">

    <div class="d-grid gap-2 d-md-flex justify-content me-auto">
        <button type="button" class="btn btn-outline-success ">{{Auth::User()->name}}</button>
        <a href="{{route('userTable')}}"><button type="button" class="btn btn-outline-danger">users</button></a>
        <a href="{{route('auth.auth')}}"><button type="button" class="btn btn-outline-danger">Log out</button></a>
    </div>

    <a href=""><button type="button" class="btn btn-warning">product</button></a>
    <a href="{{route('category')}}"><button type="button" class="btn btn-warning">category</button></a>
    <a href="{{route('categoryCreate')}}"><button type="button" class="btn btn-success">create</button></a>
</div>
<br>
    <table class="table table-bordered" >
        <thead>
            <tr class="text-center">
                <th class="col-md-1" >T/R</th>
                <th>name</th>
                <th class="col-md-2" >mahsulot soni</th>
                {{-- <th>password</th> --}}
                <th class="col-md-1">Action</th>
            </tr>
        </thead>
        <body>
            @foreach ($categories as $category)
            <tr class="text-center">
                <td>{{ ($loop->index + 1) }}</td>
                <td><button type="button" class="btn btn-outline-info">{{$category->name}}</button></td>
                <td>{{$category->mahsulotSoni}}</td>
                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href=""><button class="btn btn-primary me-md-2" type="button">update</button></a>
                        <a href=""><button class="btn btn-danger" type="button">delete</button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </body>
    </table>
{{ $categories-> links()}}
@endsection
