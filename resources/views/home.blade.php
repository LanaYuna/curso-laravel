<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Hello world</h1>

    <a href="{{ route("testpage") }}">Go to test page</a>

    <form action='formsubmitted' method="post">
        @csrf
        <br><br>
        <label for="fullname">Full name:</label>
        <input type="text" id="fullname" name="fullname" placholder="Type your full name" required><br><br>
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" placholder="Type your e-mail" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>