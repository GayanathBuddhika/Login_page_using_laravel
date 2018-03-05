<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>user</title>
  </head>
  <body>
    <form class="" action="/register" method="post">
    {{ csrf_field() }}
      <label for="">name</label>
      <input type="text" name="name" value=""><br><br>
<label for="">Email</label>
      <input type="email" name="email" value=""><br><br>
<label for="">password</label>
      <input type="password" name="password" value=""><br><br>
      <input type="submit" name="" value="register now">
    </form>
  </body>
</html>
