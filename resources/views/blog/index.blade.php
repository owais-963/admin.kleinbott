{{-- @extends('admin.layouts.app') --}}

{{-- @section('content') --}}
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">Blog Data</div>

                    <div class="card-body">
                        <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-4" style="float: right;">Create
                            Blog</a>
                        <table class="table table-bordered table-responsive  w-100 data-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Thumbnail</th>
                                    <th>Status</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($blog as $blog )
                                <tr>
                                    <td>{{ $blog->title }}</td>
                          
                                    <td>{{ $blog->slug }}</td>
        
                                    <td>{{ $blog->image }}</td>

                                    <td>
                                        @if ($blog->status == 1)
                                            <div class="alert alert-success">Active</div>
                                        @else
                                            <div class="alert alert-danger">Inactive</div>
                                        @endif
                                    </td>

                                    <td>{{ $blog->order }}</td>

                                    <td class="">
                                        <a href={{route('blogs.show', $blog->id)}}>
                                        <i class="fa fa-eye"></i></a>
                                        <a href={{ route('blogs.edit', $blog->id) }}>
                                        <i class="fa fa-pen"></i></a>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-danger" style="border: none; background-color: transparent; cursor: pointer;"><i class="fa fa-trash-alt"></i></button>
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

{{-- @endsection --}}
