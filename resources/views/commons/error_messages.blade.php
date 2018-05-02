
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:#f50;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif