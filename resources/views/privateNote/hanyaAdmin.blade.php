<html>
    <body>
        <p>hanya admin dapat melihat</p>
        @if ($notes->isEmpty())
            <p>kosong!</p>
            
        @else
            @foreach ($notes as $note)
                <h5>{{$note->judul}}</h5>
                <p>{{$note->isi}}</p>
                <p>id pembuat: {{$note->user_id}}</p>
                <hr>
            @endforeach
            
        @endif
    </body>
</html>
