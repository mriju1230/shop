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
                 @include('layouts.components.message')
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
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $brand-> name}}</td>
                                <td>{{ $brand-> slug}}</td>                                
                                <td><img style="height:50px" src="{{ URL::to('media/brands/'. $brand-> logo) }}" alt=""></td>
                                <td>{{ \Carbon\Carbon::parse($brand->created_at)->diffForHumans()}}</td>
                                <td>
                                    <a href="{{ route('brand.show', $brand -> id ) }}"><i class="ti-eye"></i></a>
                                    <a href="{{ route('brand.edit', $brand -> id ) }}"><i class="icon-pencil"></i></a>
                                    <form style="display: inline" action="{{ route('brand.destroy', $brand -> id ) }}" method="POST">
                                        @csrf 
                                        @method('DELETE') 
                                        <button type="submit"><i class="ti-trash"></i></button>
                                    </form>
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