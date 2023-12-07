<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Welcome</div>
                <div class="card-body">

                    <a href="{{ route('faqs.create') }}" class="btn btn-primary mb-4" style="float: right;">Add FAQ
                        </a>

<table>
    <thead>
        <tr>
            <th>
                Service
            </th>
            <th>
                Question
            </th>
            <th>
                Answer
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
        @foreach($faqs as $faq)
        <tr>
            <td>
                {{ $faq->service }}
            </td>
            <td>
                {{ $faq->question }}
            </td>
            <td>
                {!! str_limit(strip_tags($faq->answer), 100, '...') !!}
            </td>
            <td>
                @if ($faq->status == 1)
                <p style="color: green; padding:5px">
                    Active
                </p>
                @else
                <p style="color: red; padding:5px">
                    Inactive
                </p>
                @endif
            </td>
            <td>
                <a href={{route('faqs.show', $faq->id)}}>
                    <i class="fa fa-eye"></i></a>
                    <a href={{ route('faqs.edit', $faq->id) }}>
                    Edit</a>
                    <form action="{{ route('faqss.destroy', $faq->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-danger" 
                        style="border: none; background-color: transparent; cursor: pointer;">
                           Delete</button>
                    </form>
            </td>
        </tr>
        @endforeach
</table>