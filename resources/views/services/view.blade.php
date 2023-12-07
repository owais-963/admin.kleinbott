@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View Services</div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>title</th>
                            <td>{{ $service->title }}</td>
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td>{{ $service->slug }}</td>
                        </tr>
                        <tr>
                            <th>Home Para</th>
                            <td class="text-wrap">{!! $service->home_para !!}</td>
                        </tr>
                        <tr>
                            <th>icon</th>
                            <td><img src="{{ frontImage('services/' . $service->icon) }} " alt="image"></td>
                        </tr>
                        <tr>
                            <th>bg Image</th>
                            <td><img src="{{ frontImage('services/' . $service->bg_image) }} " alt="image"> </td>
                        </tr>
                        <tr>
                            <th>We Offer Heading</th>
                            <td>{{ $service->we_offer_heading }}</td>
                        </tr>
                        <tr>
                            <th>We Offer</th>
                            <td class="text-wrap">{!! $service->we_offer !!}</td>
                        </tr>

                        <tr>
                            <th>Meta Keyword</th>
                            <td>{{ $service->meta_keyword }}</td>
                        </tr>
                        <tr>
                            <th>meta_desc</th>
                            <td>{{ $service->meta_desc }}</td>
                        </tr>
                        <tr>
                            <th>meta_title</th>
                            <td>{{ $service->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>order</th>
                            <td>{{ $service->order }}</td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <td>
                                @if ($service->status == 1)
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
