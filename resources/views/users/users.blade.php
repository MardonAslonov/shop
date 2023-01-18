@extends('layouts.app')
@section('content')
<br>
<h2 class="text-center">Mijozlar ro'yxati</h2>


<div class="d-grid gap-2 d-md-flex justify-content-md-end">

    <div class="d-grid gap-2 d-md-flex justify-content me-auto">
        <button type="button" class="btn btn-outline-success ">{{Auth::User()->name}}</button>
        <a href="{{route('auth.auth')}}"><button type="button" class="btn btn-outline-danger">Log out</button></a>
    </div>

    <a href=""><button type="button" class="btn btn-warning">product</button></a>
    <a href="{{route('category')}}"><button type="button" class="btn btn-warning">category</button></a>
    <a href="{{route('userCreate')}}"><button type="button" class="btn btn-success">create</button></a>
    {{-- <a href="/1bet"><button type="button" class="btn btn-success">home</button></a> --}}
</div>
<br>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>T/R</th>
                <th class="col-md-2">name user</th>
                <th>email user</th>
                <th>password</th>
                <th class="col-md-1">Action</th>
            </tr>
        </thead>
        <body>
            @foreach ($users as $user)
            <tr class="text-center">
                <th>{{ ($loop->index + 1) }}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->passwordOrign}}</td>
                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        {{-- <a href="{{route('edit',$mard->id)}}"><button class="btn btn-primary me-md-2" type="button">update</button></a> --}}
                        <a href="{{route('userDelete',$user->id)}}"><button class="btn btn-danger" type="button">delete</button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </body>
    </table>
{{-- {{ $users-> links()}} --}}
@endsection
