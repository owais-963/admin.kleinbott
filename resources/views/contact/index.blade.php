<table>
    <thead>
        <>
            <th>
                sno
            </th>
            <th>
                Email
            </th>
            <th>
                Service
            </th>
            <th>
                Message
            </th>
        </tr>
    </thead>
    <tbody>
        @php
            $i=0;
        @endphp
        @foreach ($contats as $contact)
        <tr>
            <td>
                {{$i+1}}
            </td>
            <td>{{$contact->email}}</td>
            <td>
                {{$contact->service}}
            </td>
            <td class="message" onclick="open_msg()">
                <a href="{{route(contact.view,$contact->id)}}">
                {!! nl2br($contact->message) !!}</a>
            </td>
            @if (!$contact->is_read){
                <script>
                    document.querySelector('.message:nth-child({{$i+1}})').style.fontWeight='bold';
                </script>
            }
            @endif
            </tr>
        @endforeach
    </tbody>
</table>