{{-- @extends('admin.layouts.app') --}}

{{-- @section('content') --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View Testimonials</div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>title</th>
                            <td>{{ $blog->title }}</td>
                        </tr>
                        <tr>
                            <th>slug</th>
                            <td>{{ $blog->slug }}</td>
                        </tr>

                        <tr>
                            <th>image</th>
                            <td><img src="{{ frontImage('blog/' . $blog->image) }}" alt=""></td>
                        </tr>

                        <tr>
                            <th>order</th>
                            <td>{{ $blog->order }}</td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <td>
                                @if ($blog->status == 1)
                                    <div class="alert alert-success">Active</div>
                                @else
                                    <div class="alert alert-danger">Inactive</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>content</th>
                            <td class="text-wrap">{!! $blog->content !!}</td>
                        </tr>
                    </table>



                    <table></table>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
