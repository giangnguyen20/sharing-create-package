<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail Demo</title>
</head>
<body>
    <h1>Demo create package send mail</h1>
    @if (Session::has('message'))
        <p>{{ Session::get('message') }}</p>
    @endif
    <form action="{{ route('sendmail') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your name" required>
        <input type="email" name="email" placeholder="Your email" required>
        <textarea name="message" cols="30" rows="10" placeholder="Content" required></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>