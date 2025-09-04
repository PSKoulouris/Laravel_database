<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student management file</title>
</head>
<body>

<h1>Student Management System</h1>
<form method="POST" action = "{{route('saveStudent') }}" accept-charset="UTF-8">
    {{ csrf_field() }}
    <label for = "id_email">Email:</label>
    <input type ="email" id = "id_email" name = "name_email">
    <label for = "id_password">Password:</label>
    <input type="password" id ="id_password" name ="name_password">
    <input type = "submit" value ="Submit">
</form>    


</body>
</html>