<html>
    <body>
        <form action="{{route('update',$note->id)}}" method="post">
            @csrf
            <label for="isi">judul:</label><br>
            <input type="text" id="judul" name="judul" value="{{$note->judul}}">
            <br>
            <label for="isi">isi:</label><br>
            <textarea name="isi" id="isi">{{$note->isi}}</textarea>
            <br>
            <button type="submit">simpan</button>
        </form>
    </body>
</html>