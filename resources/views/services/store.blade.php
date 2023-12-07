{{-- @extends('admin.layouts.app')

@section('css')
@endsection
@section('content') --}}
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">service</div>

                <div class="card-body">

                    <form action="{{ route('services.store') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="row">

                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" name="title" value="{{ old('title') }}" required>
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
                                        id="slug" name="slug" value="{{ old('slug') }}" required>
                                    @error('slug')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="icon">Icon</label>
                                    <input type="file" class="form-control @error('icon') is-invalid @enderror"
                                        style="padding: 10px;" id="icon" name="icon" value="{{ old('icon') }}">
                                    @error('icon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label for="home_para">Home Paragraph</label>
                                    <textarea class="form-control ckeditor " id="home_para" name="home_para">{{ old('home_para') }}</textarea>

                                </div>
                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="bg_image">Background Image</label>
                                    <input type="file" class="form-control @error('bg_image') is-invalid @enderror"
                                        style="padding: 10px;" id="bg_image" name="bg_image" value="{{ old('bg_image') }}">
                                    @error('bg_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="we_offer_heading">We Offer Heading</label>
                                    <input type="text"
                                        class="form-control @error('we_offer_heading') is-invalid @enderror"
                                        id="we_offer_heading" name="we_offer_heading"
                                        value="{{ old('we_offer_heading') }}">
                                    @error('we_offer_heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label for="we_offer">We Offer</label>
                                    <textarea class="form-control ckeditor " id="we_offer" name="we_offer">{{ old('we_offer') }}</textarea>

                                </div>
                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keywords</label>
                                    <input type="text" class="form-control @error('meta_keyword') is-invalid @enderror"
                                        id="meta_keyword" name="meta_keyword" value="{{ old('meta_keyword') }}">
                                    @error('meta_keyword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-8">

                                <div class="form-group">
                                    <label for="meta_desc">Meta Description</label>
                                    <textarea class="form-control   @error('meta_desc') is-invalid @enderror" id="meta_desc" name="meta_desc">{{ old('meta_desc') }}</textarea>
                                    @error('meta_desc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                        id="meta_title" name="meta_title" value="{{ old('meta_title') }}">
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
                                        id="order" name="order" value="{{ old('order') }}">
                                    @error('order')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">

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
{{-- @endsection --}}



{{-- <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="step_heading_1">Step 1 Heading</label>
                                        <input type="text"
                                            class="form-control @error('step_heading_1') is-invalid @enderror"
                                            id="step_heading_1" name="step_heading_1" value="{{ old('step_heading_1') }}">
                                        @error('step_heading_1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-8">

                                    <div class="form-group">
                                        <label for="step_1">Step 1 Description</label>
                                        <textarea class="form-control ckeditor @error('step_1') is-invalid @enderror" id="step_1" name="step_1">{{ old('step_1') }}</textarea>
                                        @error('step_1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="step_heading_2">Step 2 Heading</label>
                                        <input type="text"
                                            class="form-control @error('step_heading_2') is-invalid @enderror"
                                            id="step_heading_2" name="step_heading_2"
                                            value="{{ old('step_heading_2') }}">
                                        @error('step_heading_2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-8">

                                    <div class="form-group">
                                        <label for="step_2">Step 2 Description</label>
                                        <textarea class="form-control ckeditor @error('step_2') is-invalid @enderror" id="step_2" name="step_2">{{ old('step_2') }}</textarea>
                                        @error('step_2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="step_heading_3">Step 3 Heading</label>
                                        <input type="text"
                                            class="form-control @error('step_heading_3') is-invalid @enderror"
                                            id="step_heading_3" name="step_heading_3"
                                            value="{{ old('step_heading_3') }}">
                                        @error('step_heading_3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-8">

                                    <div class="form-group">
                                        <label for="step_3">Step 3 Description</label>
                                        <textarea class="form-control ckeditor @error('step_3') is-invalid @enderror" id="step_3" name="step_3">{{ old('step_3') }}</textarea>
                                        @error('step_3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="step_heading_4">Step 4 Heading</label>
                                        <input type="text"
                                            class="form-control @error('step_heading_4') is-invalid @enderror"
                                            id="step_heading_4" name="step_heading_4"
                                            value="{{ old('step_heading_4') }}">
                                        @error('step_heading_4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-8">

                                    <div class="form-group">
                                        <label for="step_8">Step 4 Description</label>
                                        <textarea class="form-control ckeditor @error('step_4') is-invalid @enderror" id="step_4" name="step_4">{{ old('step_4') }}</textarea>
                                        @error('step_4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="step_heading_5">Step 5 Heading</label>
                                        <input type="text"
                                            class="form-control @error('step_heading_5') is-invalid @enderror"
                                            id="step_heading_5" name="step_heading_5"
                                            value="{{ old('step_heading_5') }}">
                                        @error('step_heading_5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-8">

                                    <div class="form-group">
                                        <label for="step_5">Step 5 Description</label>
                                        <textarea class="form-control ckeditor @error('step_5') is-invalid @enderror" id="step_5" name="step_5">{{ old('step_5') }}</textarea>
                                        @error('step_5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
