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
                <a class="btn btn-sm btn-primary" href="{{ route('brand.create') }}">Create Brand</a>
                <hr>
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Logo</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                           <tr>
                                <td>1</td>
                                <td>{{ $brand-> name}}</td>
                                <td>{{ $brand-> slug}}</td>
                                <td><img height="20px" src="{{ URL::to('$brand-> logo') }}" alt=""></td>
                                <td>
                                    <a href=""><i class="ti-eye"></i></a>
                                    <a href=""><i class="icon-pencil"></i></a>
                                    <a href=""><i class="ti-trash"></i></a>
                                </td>
                           </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <!-- end of container-->
    </section>

@endsection