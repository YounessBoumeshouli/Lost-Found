<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>
    Users Page
</h1>
<table>
    <tr>
        <td>
            name
        </td>
        <td>
            email
        </td>
        <td>
            Update
        </td>
        <td>
            delete
        </td>
    </tr>
@foreach($users as $user)
        <tr>
            <td>
                {{$user->name}}
            </td>
            <td>
                {{$user->email}}
            </td>
            <td>
                <a href="/update/{{{$user->id}}}">Update this user</a>
            </td>
            <td>
                <a href="/delete/{{{$user->id}}}">delete this user</a>
            </td>
        </tr>

@endforeach
</table>
</body>
</html>


