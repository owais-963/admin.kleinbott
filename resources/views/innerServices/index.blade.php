{{-- @extends('admin.layouts.app')

@section('content') --}}
    
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <div class="card">
                    <div class="card-header">Services Data</div>

                    <div class="card-body">
                        <a href="{{ route('data.create', $service) }}" class="btn btn-primary mb-4" style="float: right;">Add Services</a>
                        <div class="container">
                        <table class="table table-bordered table-responsive  w-100 data-table" >
                            <thead>
                                <tr>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        slug
                                    </th>
                                    <th>
                                        content
                                    </th>
                                    <th>
                                        status
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    
                                
                                <tr>
                                    <td>
                                        {{$d->heading}}
                                    </td>
                                    <td>
                                        {{$d->slug}}
                                    </td>
                                    <td>
                                        {{Str::substr($d->para, 0, 90)}}
                                    </td>
                                    <td>
                                        @if ($d->status == 1)
                                        <div class="alert alert-success">Active</div>
                                    @else
                                        <div class="alert alert-danger">Inactive</div>
                                    @endif
                                    </td>
                                    <td>
                                        <a href="{{route('data.view',$d->id)}}">VIEW
                                        <i class="fa fa-eye"></i></a>
                                        <a href="{{ route('data.editView', $d->id) }}">EDIT
                                        <i class="fa fa-pen"></i></a>
                                        <form action="{{ route('data.destroy',$d->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-danger"
                                             style="border: none; background-color: transparent; cursor: pointer;">DELETE
                                             <i class="fa fa-trash-alt"></i></button>
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
        </div>




{{-- @endsection --}}
