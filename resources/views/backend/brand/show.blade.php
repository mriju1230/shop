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
                <h2>Brand Details</h2>
                <a class="btn btn-sm btn-primary" href="{{ route('brand.index') }}">Back</a>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Name: {{ $brand->name }}</h4>
                        <p>Slug: {{ $brand->slug }}</p>
                    </div>
                    <div class="col-md-6">
                        @if($brand->logo)
                            <img src="{{ asset('media/brands/' . $brand->logo) }}" 
                                    alt="{{ $brand->name }}" 
                                    class="img-fluid border rounded" 
                                    style="max-width: 100px; background: #f8f9fa; padding: 10px;">
                        @else
                            <p class="text-muted">No logo uploaded</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- end of container-->
    </section>

@endsection