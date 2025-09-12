<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>joinmgt: one to many relationships between students and assignemnts</title>
</head>
<body>

<h1>Students Management system</h1>
<h2>Student information and assignments:</h2>

<table>
    <tr>
        <td>ID:</td>
        <td>Name:</td>
        <td>Target_date:</td>
        <td>Email:</td>
        <td>Password</td>
        <td>Actions</td>
    </tr>
    <tr>
        <td>-</td>
        <form method = "POST" action = "{{ route("saveJoin") }}" accept-charset="UTF-8">
            {{ csrf_field() }}
            <td>
                <input type="text" name="name_name">
            </td>
            <td>
                <input type = "datetime" name="name_date">
            </td>
            <td>
                <input type="email" name = "name_email">
            </td>
            <td>
                <input type ="password" name = "name_password">
            </td>
            <td>
                <input type = "submit" value = "submit">
            </td>
        </form>
    </tr>
</table>
    
</body>
</html>