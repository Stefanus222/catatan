<html>
    <body>
        <form action="{{route('salah')}}" method="get">
            <input type="text" name="token">
            <input type="text" name="info" value="{{$info}}">
            <button type="submit">masuk</button>
        </form>
    </body>
</html>
