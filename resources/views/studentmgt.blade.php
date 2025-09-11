<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student management file</title>

     @vite('resources/css/app.css') <!-- Link to Tailwind CSS -->

</head>
<!-- Form with submission to database -->

<body class = "font-sans antialiased">
<div class = "px-6 py-6 flex flex-col items-center justify-center bg-gray-50 text-black-50">

    <h1 class = "text-3xl font-semibold mb-10">Student Management System</h1>
    
    <form method="POST" action = "{{route('saveStudent') }}" accept-charset="UTF-8" class="flex flex-col gap-4">
    {{ csrf_field() }}  
        <label for = "id_email">Email:</label>
        <input type ="email" id = "id_email" name = "name_email" class ="border-2 border-black p-2 rounded">
        <label for = "id_password">Password:</label>
        <input type="password" id ="id_password" name ="name_password" class ="border-2 border-black p-2 rounded">
        <input type = "submit" value ="Submit" class = "bg-black text-white px-4 py-2 rounded">
    </form>  

    @if (session("status"))
        <p class = "mt-2 text-green-600 font-semibold">{{ session("status") }}</p>
    @endif
</div>  
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- Table with update, create,. delete, cancel actions -->

<table>
    <tr>
        <td>ID:</td>
        <td>Email:</td>
        <td>Created at:</td>
        <td>Updated at:</td>
        <td colspan = "2" >Actions:</td>
    </tr>

    @foreach ( $listStudent as $itemStudent )

        <tr>    
            <form method = "POST" action ="{{ route("updateStudent", $itemStudent)}}" accept-charset="UTF-8" ">
            {{ csrf_field() }}
                <td>
                    {{ $itemStudent-> id }}
                </td>
                <td>
                    <input type = "email" name="name_email" value = {{ $itemStudent->email }}>
                </td>
                <td>
                    <input type = "password" name = "name_password" value = {{ $itemStudent->password }}>
                </td>
                <td>
                    {{ $itemstudent->created_at }}
                </td>
                <td>
                    {{ $itemStudent->updated_at }}
                </td>
                <td>
                    <input type = "submit" value = "Update">
                </td>
            </form>

                <td>
                    <form action = "POST" method="{{ route("deleteStudent", $itemStudent->id) }}">
                    {{ csrf_field() }}
                        <input type = "submit" value = "Delete">
                    </form>
                </td>
        </tr>
        @endforeach 
</table>














</body>
</html>