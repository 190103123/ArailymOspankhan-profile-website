<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create new post</title>
</head>
<body>
   <form method="POST" action="{{ route('add-post') }}">
       @csrf
       <input type="text" name="title" placeholder="title">
       <input type="text" name="body" placeholder="body">
       <button type="submit">Create</button>
   </form>
</body>
</html>
