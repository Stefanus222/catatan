<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
    </head>
    <body>    
        <h1>hello</h1>
        <p>catatan:</p>
        @if ($notes->isEmpty())
            <p>catatan masih kosong</p>
        @else
            @foreach ($notes as $note)
                <div class="list-note">
                    <hr>
                    <h5>{{$note->judul}}</h5>
                    <p>{{$note->isi}}</p>
                    <p><a href="{{route('update-form', $note->id)}}">edit</a></p>
                    <p><a href="{{route('delete', $note->id)}}">delete</a></p>
                    <hr>
                </div>
            @endforeach
        @endif
        <p><a href="{{route('form')}}">masukkan catatan baru</a></p>
        <p><a href="{{route('home')}}">kembali ke beranda</a></p>

    </body>
</html>