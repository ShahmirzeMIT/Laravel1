<!DOCTYPE html>
<html>
<head>
    <title>Qeydiyyat</title>
</head>
<body>
    <h1>Qeydiyyat</h1>

    <form action="{{ route('qeydiyyat') }}" method="post">
        @csrf
        <div><input type="text" name="name" id=""></div>
        <span>@error('name'){{ $message }}@enderror</span>
        <div><input type="password" name="pass" id=""></div> <!-- Use 'pass' instead of 'password' as it's in your data array -->
        <span>@error('pass'){{ $message }}@enderror</span>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
