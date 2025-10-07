@extends('layouts.app')

@section('main')
    <section>
        <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
            @include('backend.components.sidebar')
            <!-- end of sidebar-->
            </div>
            <div class="col-md-9">
                <h2>All Brands</h2>
                <a class="btn btn-sm btn-primary" href="{{ route('brand.index') }}">Back</a>
                <hr>
                <form action="{{ route('brand.store') }}" style="display: flex; flex-direction: column; gap: 10px;" method="post" enctype="multipart/form-data">
                @csrf
                    <label for="">Brand Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" placeholder="Enter Brand Name">
                    <label for="">Brand Logo</label>
                    <input type="file" class="form-control form-control-sm" name="logo">
                    <button class="btn btn-primary" type="submit">Create Brand</button>
                </form>
            </div>
        </div>
        </div>
        <!-- end of container-->
    </section>

@endsection