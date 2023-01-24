@extends('layouts.app')
@section('content')
<br>
<h2 class="text-center">{{$categoryName}}</h2>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">

    <div class="d-grid gap-2 d-md-flex justify-content me-auto">
        <button type="button" class="btn btn-outline-success ">{{Auth::User()->name}}</button>
        <a href="{{route('userTable')}}"><button type="button" class="btn btn-outline-danger">users</button></a>
        <a href="{{route('auth.auth')}}"><button type="button" class="btn btn-outline-danger">Log out</button></a>
    </div>

    <a href=""><button type="button" class="btn btn-warning">product</button></a>
    <a href="{{route('category')}}"><button type="button" class="btn btn-warning">category</button></a>
    <a href="{{route('productCreate', [$categoryName, $category_id])}}"><button type="button" class="btn btn-success">create</button></a>
</div>
<br>
    <table class="table table-bordered" >
        <thead>
            <tr class="text-center">
                <th class="col-md-1" >T/R</th>
                <th>name</th>
                <th class="col-md-2" >cost</th>
                <th>amount</th>
                <th class="col-md-1">Action</th>
            </tr>
        </thead>
        <body>
            @foreach ($products as $product)
            <tr class="text-center">
                <td>{{ ($loop->index + 1) }}</td>
                {{-- <td><a href="{{route('product')}}"><button type="button" class="btn btn-outline-info">{{$products->name}}</button></a></td> --}}
                <td>{{$product->name}}</td>
                <td>{{$product->cost}}</td>
                <td>{{$product->amount}}</td>
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
{{ $products-> links()}}
@endsection
