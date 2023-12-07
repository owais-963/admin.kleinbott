<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Welcome</div>
                <div class="card-body">

                    @if(Auth::user()->name=='admin')

                    <a href="{{ route('pages.create') }}" class="btn btn-primary mb-4" style="float: right;">Add Page
                        </a>

                    @endif

                    <table class="table table-bordered table-responsive  w-100 data-table">
                        <thead>
                            <tr>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Slug
                                </th>
                                <th>
                                    Heading
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{$page->title}}</td>
                                <td>{{$page->slug}}</td>
                                <td>{{$page->heading}}</td>
                                <td>{{$page->content}}</td>
                                <td><img src="/storage/images/{{$page->image}}" alt="" width="50px"></td>
                                @if($page->status==1)
                                    <td style="color:green;">Active</td>
                                @else
                                    <td style="color:red;">Inactive</td>
                                @endif
                                </tr>
                                <td class="">
                                    <a href={{route('pages.show', $page->id)}}>
                                    <i class="fa fa-eye"></i></a>
                                    @if(Auth::user()->name=='admin')
                                    <a href={{ route('pages.edit', $page->id) }}>
                                    {{-- <i class="fa fa-pen"></i>  --}}
                                    Edit</a>
                                    @if($page->name!='admin')
                                    <form action="{{ route('pages.destroy', $page->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger" style="border: none; background-color: transparent; cursor: pointer;">
                                            {{-- <i class="fa fa-trash-alt"></i> --}}
                                            Delete</button>
                                    </form>
                                    @endif
                                    @endif
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
