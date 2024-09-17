<html>
    <body>
        <form action="{{route('create')}}" method="post">
            @csrf
            <label for="isi">judul:</label><br>
            <input type="text" id="judul" name="judul">
            <br>
            <label for="isi">isi:</label><br>
            <textarea name="isi" id="isi"></textarea>
            <br>
            <button type="submit">simpan</button>
        </form>
    </body>
</html>