<!doctype html>
<html>
    <head>
        <title>Admin Validation</title>
    </head>
    <body>
        @include('flash-message')
        <form action="{{ route('validate.admin') }}" method="post">
            @csrf
            Username: <input type="text" name="username"><br>
            Password: <input type="text" name="password"><br>
            <input type="submit" value="Validate">
        </form>
    </body>
</html>