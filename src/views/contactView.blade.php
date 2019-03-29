<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

Super Toller View!


<form action="{{route('contact')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="mail">
    <textarea name="message" id="message" placeholder="message"></textarea>
    <input type="submit" value="Submit this">
</form>


</body>
</html>