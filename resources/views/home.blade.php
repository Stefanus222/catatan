<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
    <h1>Selamat Datang!</h1>
    <nav>

    </nav>
    </header>

    <main>
        <p>Fitur tersedia:</p>
        <ul>
            <li><a href="{{route('notes')}}">catatan bersama</a></li>
            <li><a href="{{route('private-note')}}">catatan pribadi</a></li>
        </ul>
        <br><br>
        <form action="{{route('logout')}}" method="post">@csrf<button type="submit">logout</button></form>
    </main>

    <footer>penulis:stefanus</footer>
</body>
</html>