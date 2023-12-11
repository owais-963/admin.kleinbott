<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Welcome</div>
                <div class="card-body">

                    @if(Auth::user()->name=='admin')

                    <a href="{{ route('users.create') }}" class="btn btn-primary mb-4" style="float: right;">Add User
                        </a>

                    @endif

                    <table class="table table-bordered table-responsive  w-100 data-table">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="">
                                    <a href={{route('users.show', $user->id)}}>
                                    <i class="fa fa-eye"></i></a>
                                    @if(Auth::user()->name=='admin')
                                    <a href={{ route('users.edit', $user->id) }}>
                                    {{-- <i class="fa fa-pen"></i>  --}}
                                    Edit</a>
                                    @if($user->name!='admin')
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
                    <div>
                    {{$users->links()}}
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
