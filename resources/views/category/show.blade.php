@extends('category.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Show Place Details
                        <a href="{{ url('category') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label>Name</label>
                        <p>{{ $category->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <p>{!! $category->description !!}</p>
                    </div>
                    <div class="mb-3">
                        <label>Image</label>
                        <br>
                        @if ($category->image_path)
                            <img src="{{ asset($category->image_path) }}" alt="{{ $category->name }}" style="max-width: 300px; height: auto;">
                        @else
                            <p>No image available</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
