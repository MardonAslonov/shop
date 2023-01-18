@extends('layouts.app')
@section('content')
<br>
<h2 class="text-center"> Category create </h2>
<br>
<br>
<div class="row">
    <div class="col-md-6">
        <form method="get" action="{{ route('createCategoryInfo')}}">
            @csrf
            <div class="mb-3">
                <label for="address" class="form-label">name category</label>
                <input type="text" class="form-control" name="name">
            </div>
           <button type="submit" class="btn btn-success">inter</button>
        </form>
    </div>
</div>
@endsection
