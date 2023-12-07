@extends('admin.layouts.app')

@section('css')
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">service</div>

                <div class="card-body">

                    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name', $testimonial->name) }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" id="content" name="content">{{ old('content', $testimonial->content) }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="platform_id">Testimonial Platform</label>
                                    <select class="form-select @error('platform_id') is-invalid @enderror" id="platform_id"
                                        name="platform_id">
                                        <option value="">Select Testimonial Platform</option>
                                        @foreach ($testimonialPlatforms as $platform)
                                            <option value="{{ $platform->id }}"
                                                {{ old('platform_id', $testimonial->platform_id) == $platform->id ? 'selected' : '' }}>
                                                {{ $platform->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('platform_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="image">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="order">Order</label>
                                    <input type="number" class="form-control @error('order') is-invalid @enderror"
                                        id="order" name="order" value="{{ old('order', $testimonial->order) }}">
                                    @error('order')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control @error('status') is-invalid @enderror" id="status"
                                        name="status">
                                        <option value="1"
                                            {{ old('status', $testimonial->status) == 1 ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="0"
                                            {{ old('status', $testimonial->status) == 0 ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Testimonial</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
