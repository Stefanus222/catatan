<html>
    <body>
        <p>catatan:</p>
        @if ($notes->isEmpty())
        <p>kosong!</p>
        @else
            @foreach ($notes as $note)
                <h5>{{$note->judul}}</h5>
                <p>{{$note->isi}}</p>
                <hr>
            @endforeach
        @endif
        
        <p><a href="{{route('hanya-admin')}}">lihat semua</a></p>
    </body>
</html>
