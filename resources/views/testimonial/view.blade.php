@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View Testimonials</div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>name</th>
                            <td>{{ $testimonial->name }}</td>
                        </tr>
                        <tr>
                            <th>content</th>
                            <td>{{ $testimonial->content }}</td>
                        </tr>
                        <tr>
                            <th>image</th>
                            <td><img src="{{ frontImage('testimonials/' . $testimonial->image) }}" alt="image"></td>
                        </tr>
                        <tr>
                            <th>platform</th>
                            <td class="text-wrap">{!! $testimonial->platform->name !!}</td>
                        </tr>

                        <tr>
                            <th>order</th>
                            <td>{{ $testimonial->order }}</td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <td>
                                @if ($testimonial->status == 1)
                                    <div class="alert alert-success">Active</div>
                                @else
                                    <div class="alert alert-danger">Inactive</div>
                                @endif
                            </td>
                        </tr>
                    </table>



                    <table></table>
                </div>
            </div>
        </div>
    </div>
@endsection
