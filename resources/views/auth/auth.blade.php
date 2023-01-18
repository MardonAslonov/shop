@extends('layouts.app')
@section('content')
<br>
<h2 class="text-center"> Xush kelibsiz </h2>
<br>
<br>
<div class="row">
    <div class="d-grid gap-2 col-6 mx-auto">
        <form method="post" action="{{ route('userAuth')}}">
            @csrf
            <div class="mb-3">
                <h5><label for="name" class="form-label">email</label></h5>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <h5><label for="address" class="form-label">password</label></h5>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">inter</button>
              </div>
        </form>
    </div>
</div>
@endsection
