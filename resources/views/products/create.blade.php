@extends('layouts.app')
@section('content')
<br>
<h2 class="text-center"> Product create </h2>
<br>
<br>
<div class="row">
    <div class="d-grid gap-2 col-6 mx-auto">
        <form method="post" action="{{route('productStore',[$categoryName, $category_id])}}">
            @csrf
            <div class="mb-3">
                <label for="address" class="form-label">name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">cost</label>
                <input type="text" class="form-control" name="cost">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">amount</label>
                <input type="text" class="form-control" name="amount">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-success" type="submit">create</button>
            </div>
        </form>
    </div>
</div>
@endsection
