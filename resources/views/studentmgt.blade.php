<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student management file</title>

     @vite('resources/css/app.css')

</head>
<body class = "font-sans antialiased">
<div class = "px-6 py-6 flex flex-col items-center justify-center bg-gray-50 text-black-50">

    <h1 class = "text-3xl font-semibold mb-16">Student Management System</h1>
    
    <form method="POST" action = "{{route('saveStudent') }}" accept-charset="UTF-8" class="flex flex-col gap-4">
    {{ csrf_field() }}  
        <label for = "id_email">Email:</label>
        <input type ="email" id = "id_email" name = "name_email" class ="border-2 border-black p-2 rounded">
        <label for = "id_password">Password:</label>
        <input type="password" id ="id_password" name ="name_password" class ="border-2 border-black p-2 rounded">
        <input type = "submit" value ="Submit" class = "bg-black text-white px-4 py-2 rounded">
    </form>  
</div>  


</body>
</html>