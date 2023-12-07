{{-- @extends('admin.layouts.app')

@section('content') --}}
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">Service Data</div>

                    <div class="card-body">
                        <a href="{{ route('services.create') }}" class="btn btn-primary mb-4" style="float: right;">Create
                            Service</a>
                        <table class="table table-bordered table-responsive  w-100 data-table">

                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>We Offer Heading</th>
                                    <th>status</th>
                                    <th>Order</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>
                                        {{$service->title}}
                                    </td>
                                    <td>
                                        {{$service->slug}}
                                    </td>
                                    <td>
                                        {{$service->we_offer_heading}}
                                    </td>
                                    <td>
                                        {{$service->status}}
                                    </td>
                                    <td>
                                        {{$service->order}}
                                    </td>
                                    <td>
                                        {{$service->created_at}}
                                    </td>
                                    <td>
                                        {{$service->updated_at}}
                                    </td>
                                    <td>
                                        <a href={{route('services.show', $service->id)}}>
                                            <i class="fa fa-eye"></i></a>
                                            <a href={{ route('services.edit', $service->id) }}>
                                            {{-- <i class="fa fa-pen"></i>  --}}
                                            Edit</a>
                                            <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger" 
                                                style="border: none; background-color: transparent; cursor: pointer;">
                                                    {{-- <i class="fa fa-trash-alt"></i> --}}
                                                    Delete</button>
                                            </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    {{-- @section('js')
        <script>
            $(function() {

                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('services.index') }}",

                    columns: [{
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'slug',
                            name: 'slug'
                        },
                        {
                            data: 'we_offer_heading',
                            name: 'we_offer_heading'
                        },
                        {
                            data: 'status',
                            name: 'status',
                            render: function(data, type, row) {
                                if (data == 1) {
                                    return '<div class="alert alert-success">Active</div>';
                                } else {
                                    return '<div class="alert alert-danger">Inactive</div>';
                                }
                            }
                        },
                        {
                            data: 'order',
                            name: 'order'
                        },

                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'updated_at',
                            name: 'updated_at'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false, // Disable sorting for this column
                            searchable: false // Disable searching for this column
                        }
                    ]
                });

            });
        </script>
    @endsection

@endsection --}}
