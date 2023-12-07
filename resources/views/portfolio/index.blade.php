<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Welcome</div>
                <div class="card-body">


                    <a href="{{ route('portfolio.create') }}" class="btn btn-primary mb-4" 
                    style="float: right;">Add Portfolio
                        </a>


                    <table class="table table-bordered table-responsive  w-100 data-table">
    <thead>
        <tr>
            <th>
                Service
            </th>
            <th>
                Is on home
            </th>
            <th>
                Image
            </th>
            <th>
                Order
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
        @foreach ($portfolios as $potfl)

        <td>
            {{$potfl->service_id}}
        </td>
        <td>
            {{$potfl->is_on_home}}
        </td>
        <td>
            {{$potfl->image}}
        </td>
        <td>
            {{$potfl->order}}
        </td>
        <td>
            {{$potfl->status}}
        </td>
        <td>
            <a href={{route('portfolio.show', $portfolio->id)}}>
                <i class="fa fa-eye"></i></a>
                <a href={{ route('portfoli.edit', $portfolio->id) }}>
                {{-- <i class="fa fa-pen"></i>  --}}
                Edit</a>
                <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-danger" 
                    style="border: none; background-color: transparent; cursor: pointer;">
                        {{-- <i class="fa fa-trash-alt"></i> --}}
                        Delete</button>
                </form>
        </td>
            
        @endforeach
    </tbody>
</table>