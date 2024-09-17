<html>
    <body>
        <h2>silahkan masukan email dan password</h2>
        <br>
        <form action="{{route('login-act')}}" method="post">
            @csrf
            <p>email</p>
            <input type="text" name="email" id="email" placeholder="email"> <br> <br>
            <p>password</p>
            <input type="text" name="password" id="password" placeholder="password">
            <button type="submit">masuk</button>
        </form>
    </body>
</html>
