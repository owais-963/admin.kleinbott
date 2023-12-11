<div>
    <span style="display: flex">
        <b>Email: </b>
        <p>
            {{ $contact->email }}
        </p>
    </span>
    <span style="display: flex">
        <b>
            Service: 
        </b>
        <p>
            @if ($contact->service)
            {{$contact->service}}
            @endif
        </p>
    </span>
    <span>
        <b>
            Message:
        </b>
        <div class="message-content" style="white-space: pre-line; word-wrap: break-word;">
        {{$contact->message}}
        </div>
    </span>
</div>