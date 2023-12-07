{{-- @extends('admin.layouts.app') --}}

{{-- @section('css') --}}
{{-- @endsection --}}
{{-- @section('content') --}}
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">service</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Title -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                style="padding: 10px;" id="title" name="title" value="{{ old('title') }}">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Slug -->
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                style="padding: 10px;" id="slug" name="slug" value="{{ old('slug') }}">
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control ckeditor  @error('content') is-invalid @enderror" id="content" name="content">{{ old('content') }}</textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                id="image" name="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Thumbnail -->
                        {{-- <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" class="form-control-file @error('thumbnail') is-invalid @enderror"
                                id="thumbnail" name="thumbnail">
                            @error('thumbnail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" id="status"
                                name="status">
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Order -->
                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="text" class="form-control @error('order') is-invalid @enderror"
                                style="padding: 10px;" id="order" name="order" value="{{ old('order') }}">
                            @error('order')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- <form id="image-upload-form" action="{{ route('blogs.image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="image-input">
    </form> --}}
{{-- @endsection --}}

{{-- @section('js') --}}
    <script>
        function generateSlug() {
            // Get the title input field's value
            var title = document.getElementById('title').value;

            // Replace special characters and spaces with hyphens, and convert to lowercase
            var slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-');

            // Remove leading and trailing hyphens
            slug = slug.replace(/^-+|-+$/g, '');

            // Set the slug input field's value
            document.getElementById('slug').value = slug;
        }

        // Add an event listener to trigger the slug generation when the title input changes
        document.getElementById('title').addEventListener('input', generateSlug);

            document.getElementById('image-input').addEventListener('change', function() {
                document.getElementById('image-upload-form').submit();
            });
            </script>
{{-- @endsection --}}
