{{-- @extends('admin.layouts.app')

@section('content') --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Shipment</div>
                    <div class="card-body">
                        <form action="{{ route('data.edit', $service->id) }}" method="POST">
                            @csrf <!-- CSRF protection -->
                            @method('PUT') <!-- Use the PUT method for updates -->
                            <div class="row">

                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title" value="{{ old('title', $service->heading) }}"
                                            required>
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                            id="slug" name="slug" value="{{ old('slug', $service->slug) }}"
                                            required>
                                        @error('slug')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="image">Icon</label>
                                        <input type="file" class="form-control @error('icon') is-invalid @enderror"
                                            style="padding: 10px;" id="image" name="image"
                                           >
                                        @error('icon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">

                                    <div class="form-group">
                                        <label for="para">Home Paragraph</label>
                                        <textarea class="form-control ckeditor " id="para" name="para" value="{{$service->para}}">{{ old('home_para', $service->para) }}</textarea>

                                    </div>
                                </div>
{{-- 
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="bg_image">Background Image</label>
                                        <input type="file" class="form-control @error('bg_image') is-invalid @enderror"
                                            style="padding: 10px;" id="bg_image" name="bg_image"
                                            value="{{ old('bg_image', $service->bg_image) }}">
                                        @error('bg_image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
{{-- 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="we_offer_heading">We Offer Heading</label>
                                        <input type="text"
                                            class="form-control @error('we_offer_heading') is-invalid @enderror"
                                            id="we_offer_heading" name="we_offer_heading"
                                            value="{{ old('we_offer_heading', $service->we_offer_heading) }}">
                                        @error('we_offer_heading')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div> --}}
{{--                                 
                                <div class="col-lg-12">

                                    <div class="form-group">
                                        <label for="we_offer">We Offer</label>
                                        <textarea class="form-control ckeditor " id="we_offer" name="we_offer">{{ old('we_offer', $service->we_offer) }}</textarea>

                                    </div>
                                </div> --}}
{{-- 
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="meta_keyword">Meta Keywords</label>
                                        <input type="text"
                                            class="form-control @error('meta_keyword') is-invalid @enderror"
                                            id="meta_keyword" name="meta_keyword"
                                            value="{{ old('meta_keyword', $service->meta_keyword) }}">
                                        @error('meta_keyword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                {{-- <div class="col-lg-8">

                                    <div class="form-group">
                                        <label for="meta_desc">Meta Description</label>
                                        <textarea class="form-control   @error('meta_desc') is-invalid @enderror" id="meta_desc" name="meta_desc">{{ old('meta_desc', $service->meta_desc) }}</textarea>
                                        @error('meta_desc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                {{-- <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                            id="meta_title" name="meta_title"
                                            value="{{ old('meta_title', $service->meta_title) }}">
                                        @error('meta_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="order">Order</label>
                                        <input type="number" class="form-control @error('order') is-invalid @enderror"
                                            id="order" name="order" value="{{ old('order', $service->order) }}">
                                        @error('order')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control @error('status') is-invalid @enderror" id="status"
                                            name="status">
                                            <option value="1"
                                                {{ old('status', $service->status) == 1 ? 'selected' : '' }}>
                                                Active</option>
                                            <option value="0"
                                                {{ old('status', $service->status) == 0 ? 'selected' : '' }}>
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
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
