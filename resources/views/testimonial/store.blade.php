@extends('admin.layouts.app')

@section('css')
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">service</div>

                <div class="card-body">

                    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data"
                        role="form">
                        @csrf
                        @method('POST')

                        <div class="row">

                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        style="padding: 10px;" id="name" name="name" value="{{ old('name') }}">
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
                                    <textarea class="form-control  " id="content" name="content">{{ old('content') }}</textarea>

                                </div>
                            </div>



                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="platform_id">TestimonialPlatform</label>
                                    <select class="form-select @error('platform_id') is-invalid @enderror" id="platform_id"
                                        name="platform_id" required>
                                        <option value="">Select Testimonial Platform</option>

                                        @foreach ($testimonialPlatforms as $testimonialplatform)
                                            <option value="{{ $testimonialplatform->id }}">{{ $testimonialplatform->name }}
                                            </option>
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
                                        id="image" name="image" value="{{ old('image') }}">
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
                                        id="order" name="order" value="{{ old('order') }}">
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
                                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>
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

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
