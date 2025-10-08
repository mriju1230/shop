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
                    <h2>Edit Brand</h2>
                    <a class="btn btn-sm btn-primary" href="{{ route('brand.index') }}">Back</a>
                    <hr>

                    <form action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 12px;">
                        @csrf
                        @method('PUT')

                        <label for="name">Brand Name</label>
                        <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Enter Brand Name" value="{{ old('name', $brand->name) }}" required>

                        <label for="logo">Brand Logo</label>
                        <input type="file" class="form-control form-control-sm" name="logo" id="logo">

                        @if($brand->logo)
                            <div class="mt-2">
                                <p>Current Logo:</p>
                                <img src="{{ asset('media/brands/' . $brand->logo) }}" alt="Brand Logo" style="width: 100px; height: auto; border: 1px solid #ddd; padding: 5px; border-radius: 8px;"
                                >
                            </div>
                        @endif

                        <button class="btn btn-success mt-2" type="submit">Update Brand</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end of container-->
    </section>
@endsection
