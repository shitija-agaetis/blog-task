@extends('category.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Place
                            <a href="{{ url('category') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" rows="3" class="form-control">{!! $category->description !!}</textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Current Image</label>
                                <br>
                                @if ($category->image_path)
                                    <img src="{{ asset($category->image_path) }}" alt="{{ $category->name }}" style="max-width: 150px; height: auto;">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Upload New Image (optional)</label>
                                <input type="file" name="image" class="form-control">
                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
